<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualificationinfo extends Model
{
    //
    public function studentinfo(){
        return $this->belogsTo('\App\studentinfo');
    }
    protected $fillable=[
            'st_id',
            'degree',
            'from_date',
            'to_date',
            'institute_attended',
            'uni_board',
            'obtain_marks',
            'total_marks',
            'percentage',
            'grade',
            'cgpa',
           'marit',
            'doc_checklist',
           'copies'
];
    
}
