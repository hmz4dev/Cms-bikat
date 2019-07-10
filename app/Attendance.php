<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    public function Degree(){
        return $this->belongsTo('\App\Degree');
    }
    public function studentinfo(){
        return $this->belongsTo('\App\studentinfo');
    }
    public function OfferedCourse(){
        return $this->belongsTo('\App\OfferedCourse');
    }
}
