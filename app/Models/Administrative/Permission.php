<?php

namespace App\Models\Administrative;

use Illuminate\Database\Eloquent\Model;
use App\Models\Administrative\Role;
use Illuminate\Database\Eloquent\SoftDeletes;


class Permission extends Model
{
	use SoftDeletes;
	
    protected $fillable = ['name', 'description', 'area', 'deleted_at'];

	public static function createCustom($data)
	{
		return self::create($data);
	}

	public static function updateCustom($id, $data)
	{
		return self::find($id)->update($data);
	}
	
	public function roles()
    {
    	return $this->belongsToMany(Role::class);
    }
}
