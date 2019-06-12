<?php

namespace App\Models\Administrative;

use Illuminate\Database\Eloquent\Model;
use App\Models\Administrative\Client;
use App\Models\Administrative\Type;
use App\Models\Administrative\Entity;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Tenant\TenantModels;

class Section extends Model
{
    use SoftDeletes, TenantModels;
    
    protected $fillable = ['client_id', 'name', 'deleted_at'];

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

    public function types()
    {
        return $this->hasMany(Type::class, 'section_id');
    }

    public function entities()
    {
        return $this->belongsToMany(Entity::class, 'entity_section');
    }

    public function addEntity($entity)
    {
        if(is_string($entity)){
            $entity = Entity::where('name', $entity)->firstOrFail();
        }
        
        if($this->existsEntity($entity)){
            return;
        }

        return $this->entities()->attach($entity);
    }

    public function removeEntity($entity)
    {
        if(is_string($entity)){
            $entity = Entity::where('name', $entity)->firstOrFail();
        }

        return $this->entities()->detach($entity);
    }

    public function existsEntity($entity)
    {
        if(is_string($entity)){
            $entity = Entity::where('name', $entity)->firstOrFail();
        }

        return (boolean) $this->entities()->find($entity->id);
    }
}
