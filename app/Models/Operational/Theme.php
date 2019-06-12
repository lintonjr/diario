<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Model;
use App\Models\Administrative\Daily;
use App\Models\Administrative\Section;
use App\Models\Administrative\Type;
use App\Models\Administrative\Subtype;
use App\Models\Administrative\Competence;
use App\Models\Administrative\Layout;
use App\Models\Management\Agency;
use App\Models\Backofficer\Message;
use DB;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Tenant\TenantModels;

class Theme extends Model
{
    use SoftDeletes, TenantModels;

    // protected $table = 'theme';
    protected $fillable = [
        'message_id',
        'section_id',
        'daily_id',
        'agency_id',
        'type_id',
        'subtype_id',
        'competence_id',
        'layout_id',
        'repeated_id',
        'act',
        'year',
        'title',
        'content',
        'file',
        'status',
        'publish_number',
        'user_created',
        'user_accepted',
        'diagrammed_by',
        'accepted_at',
        'deleted_at'
    ];

    public static function createCustom($data)
    {
        $data['status'] = 'Aguardando Aprovação';
		return self::create($data);
    }

    public static function createRepeatCustom($data)
    {
		return self::create($data);
	}

    public static function updateCustom($id, $data)
    {
		return self::find($id)->update($data);
	}

    public function daily()
    {
        return $this->belongsTo(Daily::class, 'daily_id');
    }
    
    public function agency()
    {
        return $this->belongsTo(Agency::class, 'agency_id');
    }
    
    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }

    public function subtype()
    {
        return $this->belongsTo(Subtype::class, 'subtype_id');
    }

    public function competence()
    {
        return $this->belongsTo(Competence::class, 'competence_id');
    }

    public function layout()
    {
        return $this->belongsTo(Layout::class, 'layout_id');
    }

    public function message()
    {
        return $this->belongsTo(Message::class, 'message_id');
    }

    public function dailySync()
    {
        return $this->belongsToMany(Daily::class, 'daily_theme');
    }

    public static function disapprove($id, $data)
    {
		return self::find($id)->update($data);
	}
    
    public static function approves($id, $data)
    {
		return self::find($id)->update($data);
    }

    public static function uniqueAlfa($length=16)
    {
        $salt = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $len = strlen($salt);
        $pass = '';
        mt_srand(10000000*(double)microtime());
        for ($i = 0; $i < $length; $i++) {
            $pass .= $salt[mt_rand(0,$len - 1)];
        }
        return $pass;
    }

    public function search(Array $data, $totalPage, $client)
    {
        $now = Carbon::now();
        @$from = @$data['date_ini'];
        @$to = @$data['date_end'];

        $themes = Theme::with(['agency', 'section'])->select(DB::raw('themes.*, agencies.id AS agency_id, agencies.name as nameAgency, entities.id as entity_id, entities.name as nameEntity, clients.id as client_id, clients.name as client_name, dailies.id as dailyId'))
            ->leftJoin('agencies', 'themes.agency_id' , '=', 'agencies.id' )
            ->leftJoin('entities', 'agencies.entity_id' , '=', 'entities.id' )
            ->leftJoin('clients', 'entities.client_id' , '=', 'clients.id' )
            ->leftJoin('dailies', 'themes.daily_id' , '=', 'dailies.id' )
            ->whereNull("themes.deleted_at")
            ->whereNotNull("themes.diagrammed_by")
            ->whereNull("agencies.deleted_at")
            ->where("themes.status", "=", "Aprovado")
            ->where("clients.id", "=", $client->id)
            ->where("dailies.date_released", "<=", $now)
            ->where(function($query) use ($data, $from, $to) {
                if (isset($data['title']))
                    $query->where('title', 'LIKE',"%{$data['title']}%");
                if (isset($data['entity']))
                    $query->where('entities.name', 'LIKE', "%{$data['entity']}%");
                if (isset($data['agency']))
                    $query->where('agencies.name', 'LIKE', "%{$data['agency']}%");
                if(isset($data['date_ini']))
                    $query->whereBetween('themes.diagrammed_by', array($from, $to));
        })
        ->paginate($totalPage);
        return $themes;
    }

    public function searchid(Array $data)
    {
        $now = Carbon::now();
        if(isset($data['publish_number'])){
            $themes = Theme::with('daily')->where('publish_number', $data['publish_number'])->whereNotNull('diagrammed_by')->first();
            if (isset($themes) && $themes->id != null){
                return $themes;
            }
        }
    }
}
