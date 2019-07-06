<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Course extends Model
{
    //
    public function Enrollment(){
        return $this->hasMany('\App\Enrollment');
    }
  protected  $fillable=[
        'course_code','course_name','credit_hours','pre_req'
    ];
    protected $primaryKey = 'id';
    
}