<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function albums()
    {
        return $this->hasMany(Album::class);
    }
    public function singles()
    {
        return $this->hasMany(Single::class);
    }
}
