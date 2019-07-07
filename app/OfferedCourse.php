<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfferedCourse extends Model
{
    public function Degree(){
        return $this->belongsTo('\App\Degree');
    }
    public function MarksDiv(){
        return $this->belongsTo('\App\MarksDiv');
    }
    public function CourseGroup(){
        return $this->belongsTo('\App\CourseGroup');
    }
    public function Course(){
        return $this->belongsTo('\App\Course');
    }
    public function instructor(){
        return $this->belongsTo('\App\instructor');
    }
}
