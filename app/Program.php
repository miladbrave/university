<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    public function programcourse()
    {
        return $this->hasMany(ProgramCours::class);
    }
}
