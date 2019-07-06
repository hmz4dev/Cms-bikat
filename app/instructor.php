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
        'name',
        'email',
        'cellno',
        'type',
        'department',

    ];
}
