<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class instructor extends Model
{
    //
    public function Enrollment(){
        return $this->hasMany('\App\Enrollment');
    }
    protected  $fillable=[
        'fname',
        'lastname',
        'email',
        'cellno',
        'type',
        'department',
       'specialization',
        'department'
    ];
}
