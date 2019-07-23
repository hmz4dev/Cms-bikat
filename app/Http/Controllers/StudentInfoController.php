<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\studentinfo;
use App\Session;
use App\Degree;
use App\Decipline;

class StudentInfoController extends Controller
{
    //
    function registration(){
        $students=studentinfo::all();
        $sessions=Session::all();
        $degrees=Degree::all();
        $deciplines=Decipline::all();
        return view('enrollment.studentRegistration.registration',compact('students','sessions','degrees','deciplines'));
    }
   
 public function list(){
$registrations = studentinfo::all();
    return view('enrollment.studentRegistration.list',compact('registrations'));

 }
   
    public function store(Request $request){
        $filename='';
        if($request->hasfile('image')){
            
            $filename = $this->getFileName($request->image);
 $request->image->move(base_path('public/images/students'), $filename);
        }
       
        $create=studentinfo::create([
            'status'=>$request->status,
            'session'=>$request->session,
            'semester'=>$request->semester,
            'degree'=>$request->degree,
            'shift'=>$request->shift,
            'urban_rural'=>$request->urban_rural,
            'decipline'=>$request->decipline,
            'domicile'=>$request->domicile,
            'seat_type'=>$request->seat_type,
            'image'=>$filename,
            'gender'=>$request->gender,
            'name'=>$request->name,
            'st_cnic'=>$request->st_cnic,
            'dob'=>$request->dob,
            'reg_no'=>$request->reg_no,
            'previous_degree'=>$request->previous_degree,
            'section'=>$request->section,
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
        if($create){
            return redirect('/enrollment/studentRegistration/list');
        }
    }
 
    protected function getFileName($file)
    {
       return str_random(32) . '.' . $file->extension();
    }
 public function edit($id){
    $student =studentinfo::where('st_id', $id)->first();
    $sessions=Session::all();
    $degrees=Degree::all();
    $deciplines=Decipline::all();
    return view('enrollment.studentRegistration.edit',compact('student','sessions','degrees','deciplines'));

 }

 public function update(Request $request)
    {
        $filename='';
        if($request->hasfile('image')){
            
            $filename = $this->getFileName($request->image);
 $request->image->move(base_path('public/images/students'), $filename);
        }
       $student = studentinfo::where('st_id', $request->st_id)->first();
       $data = [
        'status'=>$request->status,
        'session'=>$request->session,
        'semester'=>$request->semester,
        'degree'=>$request->degree,
        'shift'=>$request->shift,
        'urban_rural'=>$request->urban_rural,
        'decipline'=>$request->decipline,
        'domicile'=>$request->domicile,
        'seat_type'=>$request->seat_type,
        'image'=>$filename,
        'gender'=>$request->gender,
        'name'=>$request->name,
        'st_cnic'=>$request->st_cnic,
        'dob'=>$request->dob,
        'reg_no'=>$request->reg_no,
        'previous_degree'=>$request->previous_degree,
        'section'=>$request->section,
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
    ];
        $student->update($data);
       
            return redirect('/enrollment/studentRegistration/list');
        
    }



    public function delete($id){
        $student =studentinfo::where('st_id', $id)->first();
        $student->delete();
        return redirect('/enrollment/studentRegistration/list');
    }
  
}
