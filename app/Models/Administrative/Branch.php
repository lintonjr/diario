<?php

namespace App\Models\Administrative;

use Illuminate\Database\Eloquent\Model;
use App\Models\Administrative\Sphere;

class Branch extends Model
{
    public function Sphere()
    {
        return $this->belongsTo(Sphere::class);
    }
}
