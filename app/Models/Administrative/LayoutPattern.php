<?php

namespace App\Models\Administrative;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LayoutPattern extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'deleted_at'];

    public static function createCustom($data)
    {
		return self::create($data);
    }

    public static function updateCustom($id, $data)
    {
	    return self::find($id)->update($data);
    }
}
