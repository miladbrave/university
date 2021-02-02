<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public function photo()
    {
        return $this->hasOne(Photo::class,'site_id');
    }
}
