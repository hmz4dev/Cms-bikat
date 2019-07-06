<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseGroup extends Model
{
    public function OfferedCourse(){
        return $this->hasMany('\App\OfferedCourse');
    }
}
