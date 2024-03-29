<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studentinfo extends Model
{
    //
    public function Qualificationinfo(){
        return $this->hasMany('\App\Qualificationinfo');
    }
    public function Personalinfo(){
        return $this->hasMany('\App\Personalinfo');
    }
    public function Sibling(){
        return $this->hasMany('\App\Sibling');
    }
    public function Enrollment(){
        return $this->hasMany('\App\Enrollment');
    }
     public function ReportStudent(){
        return $this->hasMany('\App\ReportStudent');
    }
    public function Degree(){
        return $this->belongsTo('\App\Degree');
    }
    protected $primaryKey = 'st_id';
    protected  $fillable=[
     
        'status',
        'session',
        'semester',
        'degree',
        'shift',
        'urban_rural',
        'decipline',
        'domicile',
        'seat_type',
        'image',
        'gender',
        'name',
        'st_cnic',
        'dob',
        'reg_no',
        'previous_degree',
        'section',
        'father_name',
        'father_income',
        'father_cnic',
        'father_occupation',
        'nationality',
        'religion',
        'telephone',
        'cellno',
        'email',
        'city',
        'temporary_address',
        'permanent_address',
        'test',
        'dot',
        'marks',
        'guardian',
        'relation',
        'guardian_phone',
        'emergency_person',
        'emergency_tel',
        'emergency_cell'
        
    ];
}
