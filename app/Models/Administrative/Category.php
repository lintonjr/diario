<?php

namespace App\Models\Administrative;

use Illuminate\Database\Eloquent\Model;
use App\Models\Administrative\Category;

class Category extends Model
{
    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
}
