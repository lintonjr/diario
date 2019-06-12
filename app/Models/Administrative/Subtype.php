<?php

namespace App\Models\Administrative;

use Illuminate\Database\Eloquent\Model;
use App\Models\Administrative\Type;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Tenant\TenantModels;

class Subtype extends Model
{
    use SoftDeletes, TenantModels;

    protected $fillable = ['type_id', 'name', 'deleted_at'];

    public static function createCustom($data)
    {
		return self::create($data);
    }
    
    public static function updateCustom($id, $data)
    {
	    return self::find($id)->update($data);
    }
    
    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
}
