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

    public function category()
    {
        return $this->hasOne(CuorseCategory::class);
    }

    public function type()
    {
        return $this->hasOne(CourseType::class);
    }
}
