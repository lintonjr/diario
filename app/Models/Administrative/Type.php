<?php

namespace App\Models\Administrative;

use Illuminate\Database\Eloquent\Model;
use App\Models\Administrative\Section;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Tenant\TenantModels;

class Type extends Model
{
    use SoftDeletes, TenantModels;

    protected $fillable = ['section_id', 'name', 'deleted_at'];

    public static function createCustom($data)
    {
		return self::create($data);
	}
    
    public static function updateCustom($id, $data)
    {
		return self::find($id)->update($data);
    }

    public function section()
    {
    	return $this->belongsTo(Section::class, 'section_id');
    }
}
