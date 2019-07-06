<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $course =Course::paginate(15);
       
        return view('enrollment.course', compact('course'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('enrollment.course');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $rows = $request->input('rows');
      
         foreach ($rows as $row)
        {
      
            $Courses []= array(
                'course_code'=>$row['Course_code'],
            'course_name'=>$row['Course_name'],
            'credit_hours'=>$row['Credit_hours'],
            'pre_req'=>$row['Pre_req']  
          
            );
            
        }
        Course::insert($Courses);

            return redirect('/course')->with('message', 'submitted successfully');
            }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $course=Course::find($id);
        return redirect('course',compact('course','id')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course=Course::find($id);
        $course->course_code=$request->get('course_code');
        $course->course_name=$request->get('course_name');
        $course->credit_hours=$request->get('credit_hours');
        $course->save();
        return redirect('/course')->with('message', 'submitted successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        $course_code=Course::find($id);
       $deleted=$course_code->delete();
       if($deleted){
        return redirect('/course')->with('message', 'submitted successfully'); 
        } 
        }
   
}
