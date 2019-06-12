<?php

namespace App\Models\Administrative;

use Illuminate\Database\Eloquent\Model;
use App\Models\Administrative\Client;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Tenant\TenantModels;

class Calendar extends Model
{
    use SoftDeletes, TenantModels;

    protected $fillable = ['client_id', 'description', 'date', 'permanent', 'deleted_at'];

    public static function createCustom($data)
    {
		return self::create($data);
    }
    
    public static function updateCustom($id, $data)
    {
	    return self::find($id)->update($data);
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    // public function getDateAttribute()
    // {
    //     $date = $this->attributes['date'];
    //     return \Helper::formatDate($date);
    // }
    
    public function getPermanentAttribute()
    {
        $permanent = $this->attributes['permanent'];
        if($permanent == 1)
        {
            $permanent = 'Recorrente';
        } else {
            $permanent = 'Não Recorrente';
        }
        return $permanent;
    }
}
