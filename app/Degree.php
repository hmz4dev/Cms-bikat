<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    //
    public function studentinfo(){
        return $this->hasMany('\App\studentinfo');
    }
}
