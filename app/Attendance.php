<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['enrollment_id', 'semester', 'subject', 'name', 'attendance', 'teacher_id', 'regno', 'degree'];
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
