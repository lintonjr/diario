<?php

namespace App\Models\Backofficer;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['title', 'message'];

	public static function createCustom($data)
	{
		return self::create($data);
	}
}
