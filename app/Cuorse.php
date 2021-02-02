<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuorse extends Model
{
    public function precourses()
    {
//        return $this->hasMany(PreCourse::class);
        return $this->belongsToMany(Cuorse::class, 'pre_courses', 'cuorse_id', 'pre_course_id');
    }
}
