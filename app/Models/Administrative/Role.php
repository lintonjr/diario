<?php

namespace App\Models\Administrative;

use Illuminate\Database\Eloquent\Model;
use App\Models\User\User;
use App\Models\Administrative\Permission;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'description', 'deleted_at'];

    public static function createCustom($data)
    {
		return self::create($data);
	}
    
    public static function updateCustom($id, $data)
    {
		return self::find($id)->update($data);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function addPermission($permission)
    {
        if(is_string($permission)){
            $permission = Permission::where('name', $permission)->firstOrFail();
        }
        if($this->existsPermission($permission)){
            return;
        }

        return $this->permissions()->attach($permission);
    }

    public function removePermission($permission)
    {
        if(is_string($permission)){
            $permission = Permission::where('name', $permission)->firstOrFail();
        }

        return $this->permissions()->detach($permission);
    }
    
    public function existsPermission($permission)
    {
        if(is_string($permission)){
            $permission = Permission::where('name', $permission)->firstOrFail();
        }

        return (boolean) $this->permissions()->find($permission->id);
    }
}

