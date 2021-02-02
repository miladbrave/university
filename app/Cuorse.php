<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuorse extends Model
{
    public function precourses()
    {
        return $this->hasMany(PreCourse::class);
    }
}
