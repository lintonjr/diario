<?php

namespace App\Models\Administrative;

use Illuminate\Database\Eloquent\Model;
use App\Models\Administrative\Client;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Tenant\TenantModels;

class Daily extends Model
{
    use SoftDeletes, TenantModels;
    
    protected $fillable = ['description', 'client_id', 'number', 'date_released', 'year', 'file_path', 'deleted_at'];


    public static function createCustom($data)
    {
	    return self::create($data);
	}
    
    public static function updateCustom($id, $data)
    {
        if (isset($data['date'])) {
            $data['date_released'] = \Helper::convertDate($data['date']);
        }

	    return self::find($id)->update($data);
    }
    
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public static function publishDaily($id, $data)
    {
	    return self::find($id)->update($data);
	}

    public function search(Array $data, $totalPage, $client)
    {
        $now = Carbon::now();
        @$from = @$data['date_ini'];
        @$to = @$data['date_end'];

        $dailies = Daily::whereNull("deleted_at")
            ->whereNotNull("file_path")
            ->where('client_id', $client->id)
            ->where('date_released', '<=', $now)
            ->where(function($query) use ($data, $from, $to) {
                if(isset($data['date_ini']))
                    $query->whereBetween('date_released', array($from, $to));
        })
        ->paginate($totalPage);
        
        return $dailies;
    }

    // public function getDateReleasedAttribute()
    // {
    //     $date_released = $this->attributes['date_released'];
    //     return \Helper::formatDate($date_released);
    // }
    
    public function getYearAttribute()
    {
        $year = $this->attributes['year'];
        return \Helper::Roman($year);
    }
}
