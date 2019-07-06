<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class instructor extends Model
{
    //
    public function Enrollment(){
        return $this->hasMany('\App\Enrollment');
    }
    public function OfferedCourse(){
        return $this->hasMany('\App\OfferedCourse');
    }
    protected  $fillable=[
        'name',
        'email',
        'cellno',
        'type',
        'department',

    ];
}
