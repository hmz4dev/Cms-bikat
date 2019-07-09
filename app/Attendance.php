<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    public function Degree(){
        return $this->belongsTo('\App\Degree');
    }
}
