<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\studentinfo;

class StudentInfoController extends Controller
{
    //
    function registration(){
        $students=studentinfo::all();
        return view('enrollment.studentRegistration.registration',compact('students'));
    }
   
 
   
    public function store(Request $request){
       
        $create=studentinfo::create([
            'status'=>$request->status,
            'ceased'=>$request->ceased,
            'semester'=>$request->semester,
            'degree'=>$request->degree,
            'shift'=>$request->shift,
            'urban_rural'=>$request->urban_rural,
            'decipline_subject'=>$request->decipline_subject,
            'domicile'=>$request->domicile,
            'seat_type'=>$request->seat_type,
            'image'=>$request->image,
            'gender'=>$request->gender,
            'name'=>$request->name,
            'st_cnic'=>$request->st_cnic,
            'dob'=>$request->dob,
            'reg_no'=>$request->reg_no,
            'previous_degree'=>$request->previous_degree,
            'department'=>$request->department,

            'father_name'=>$request->father_name,
            'father_income'=>$request->father_income,
            'father_cnic'=>$request->father_cnic,
            'father_occupation'=>$request->father_occupation,
            'nationality'=>$request->nationality,
            'religion'=>$request->religion,
            'telephone'=>$request->telephone,
            'cellno'=>$request->cellno,
            'email'=>$request->email,
            'city'=>$request->city,
            'temporary_address'=>$request->temporary_address,
            'permanent_address'=>$request->permanent_address,
            'test'=>$request->test,
            'dot'=>$request->dot,
            'marks'=>$request->marks,
            'guardian'=>$request->guardian,
            'relation'=>$request->relation,
            'guardian_phone'=>$request->guardian_phone,
            'emergency_person'=>$request->emergency_person,
            'emergency_tel'=>$request->emergency_tel,
            'emergency_cell'=>$request->emergency_cell,
        ]);
        if($request->hasfile('image')){
            $path=storage::disk('public')->put('images',$request->file('image'));
        }
        if($create){
            return redirect('/registration')->with('message', 'submitted successfully');
        }
    }
 
  
  
}
