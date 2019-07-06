<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personalinfo extends Model
{
    public function studentinfos(){
        return $this->belogsTo('\App\studentinfo');
    }
    protected  $fillable=[
        'student_id',
        'blood_group',
     'martial_status',
      'family_doctor',
    'hostel_required',
 'transport_required',
     'hostel_granted',
  'transport_granted',
 'addmission_granted',
            'hobbies',
            'ailment',
       'faculity_hec',
  'personality_point',
      'foriegn_visit'
    ];
}
