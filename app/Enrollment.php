<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    //
    public function session(){
        return $this->belongsTo('\App\session');
    }
    public function studentinfo(){
        return $this->belongsTo('\App\studentinfo');
    }
    public function Course(){
        return $this->belongsTo('\App\Course');
    }
    public function instructor(){
        return $this->belongsTo('\App\instructor');
    }

    protected $fillable=[
        'enrolldate',
'enrollsemester',
'session',
'degree',
'student_name',
'father_name',
'Regno',
'section',
        'approval',
'course_work',
'synopsis',
'after_ceased',
'chalan_no',
'chalan_amount',
'Remarks',
'enroll_status',
'Course_name',
'course_type',
'course_status',
'credit_hours',
'course_incharge'
    ];
}
