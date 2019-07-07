<?php

namespace App\Http\Controllers;

use App\OfferedCourse;

use App\MarksDiv;
use App\CourseGroup;
use App\Course;
use App\instructor;
use App\Degree;
use App\Session;
use Illuminate\Http\Request;

class OfferedCourseController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Degrees=Degree::all();
        $marks=MarksDiv::all();
        $CourseGroups=CourseGroup::all();
        $instructors=instructor::all();
        $courses=Course::all();
        $sessions=Session::all();
        return view('enrollment.offeredCourses', compact('Degrees','marks','CourseGroups','instructors','courses','sessions'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   
        $degree=$request->row[0]['degree'];
        $semester=$request->row[0]['Semester'];
        $rows =$request->input('row');
 foreach($rows as $row)
 {
       if(!empty($row['Course_code']))
       {
        $records []=array(
            'degree'=>$degree,
            'semester'=>$semester,
            'course_code'=>$row['Course_code'],
            'course_name'=>$row['Course_name'],
            'credit_hours'=>$row['Credit_hours'],
            'mid'=>$row['mid'],
            'internal'=>$row['internal'],
            'final'=>$row['final'],
            'practical'=>$row['practical'],
            'total'=>$row['total'],
            'course_group'=>$row['Course_group'],
            'pre_req'=>$row['Pre_req'],
            'section'=>$row['Section'],
            'course_incharge'=>$row['Course_incharge'],
        );
       };
      
    }
    OfferedCourse::insert($records);

    return redirect('offeredCourses')->with('message', 'submitted successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\OfferedCourse  $offeredCourse
     * @return \Illuminate\Http\Response
     */
    public function show(OfferedCourse $offeredCourse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OfferedCourse  $offeredCourse
     * @return \Illuminate\Http\Response
     */
    public function edit(OfferedCourse $offeredCourse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OfferedCourse  $offeredCourse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OfferedCourse $offeredCourse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OfferedCourse  $offeredCourse
     * @return \Illuminate\Http\Response
     */
    public function destroy(OfferedCourse $offeredCourse)
    {
        //
    }
    public function getcourses($name)
    {
      
             $courses= Course::where('course_name', $name)->first();
           if (!$courses) {
               return response()->json(['errors' => $error->errors()->all()]);
           } else {
               
               return response()->json([
                   'Coursecode' => $courses->course_code,
                   'Credithours'=> $courses->credit_hours,
                    'Prereq'    =>$courses->pre_req,
                   ]);
                   
           }
  
    }
    
}
