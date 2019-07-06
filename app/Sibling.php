<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sibling extends Model
{
    public function studentinfo(){
        return $this->belogsTo('\App\studentinfo');
    }
    protected  $fillable=[
        'st_id','Name',
        'Relation','Age','Edudept','Examdept','Degree',
        'Remarks'
    ];
}
