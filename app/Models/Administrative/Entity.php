<?php

namespace App\Models\Administrative;

use Illuminate\Database\Eloquent\Model;
use App\Models\Administrative\State;
use App\Models\Administrative\Section;
use App\Models\Administrative\Client;
use App\Models\Management\Agency;
use App\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Tenant\TenantModels;

class Entity extends Model
{
    use SoftDeletes, TenantModels;

    protected $fillable = ['state_id', 'client_id', 'name', 'deleted_at'];

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

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    public function agencies()
    {
        return $this->hasMany(Agency::class, 'agency_id');
    }

    public function sections()
    {
        return $this->belongsToMany(Section::class, 'entity_section');
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

    
}
