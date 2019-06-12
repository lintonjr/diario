<?php

namespace App\Models\Administrative;

use Illuminate\Database\Eloquent\Model;
use App\Models\Administrative\Status;

class Status extends Model
{
    protected $fillable = ['name', 'color', 'deleted_at'];

    public static function createCustom($data){
		return self::create($data);
	}
	public static function updateCustom($id, $data){
		return self::find($id)->update($data);
	}
}
