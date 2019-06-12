<?php

namespace App\Models\Management;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Administrative\Entity;
use App\Models\Administrative\Category;

use App\Tenant\TenantModels;

class Agency extends Model
{
    use SoftDeletes, TenantModels;

    protected $fillable = ['entity_id', 'category_id', 'name', 'initials', 'cnpj', 'deleted_at'];

    public static function createCustom($data)
    {
		return self::create($data);
    }
    
    public static function updateCustom($id, $data)
    {
		return self::find($id)->update($data);
	}
   
    public function entity()
    {
        return $this->belongsTo(Entity::class, 'entity_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'agency_user');
    }
    
}
