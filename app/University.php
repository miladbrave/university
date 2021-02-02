<?php

namespace App;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use Sluggable;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'enname'
            ]
        ];
    }

    public function photo()
    {
        return $this->hasOne(Photo::class);
    }

}
