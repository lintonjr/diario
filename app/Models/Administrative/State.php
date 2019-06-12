<?php

namespace App\Models\Administrative;

use Illuminate\Database\Eloquent\Model;
use App\Models\Administrative\State;

class State extends Model
{
    public function entities()
    {
        return $this->hasMany(Entity::class);
    }
}
