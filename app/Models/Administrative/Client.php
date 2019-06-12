<?php

namespace App\Models\Administrative;

use Illuminate\Database\Eloquent\Model;
use App\Models\Administrative\Section;
use App\Models\Administrative\LayoutPattern;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Tenant\TenantModels;

class Client extends Model
{
  	use SoftDeletes, TenantModels;

  	protected $fillable = ['layout_pattern_id', 'name', 'initials', 'alias', 'deleted_at'];

	public static function createCustom($data)
	{
		return self::create($data);
	}

	public static function updateCustom($id, $data)
  	{
    	return self::find($id)->update($data);
  	}

	public function layoutPattern()
  	{
   		return $this->belongsTo(LayoutPattern::class, 'layout_pattern_id');
  	}

	public function sections()
	{
		return $this->hasMany(Section::class, 'client_id');
	}

}
