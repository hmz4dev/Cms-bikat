<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use Validator;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $courses =Course::paginate(15);
       
        return view('enrollment.course', compact('courses'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        
        $create=Course::create([
            'course_code'=>$request->Course_code,
            'course_name'=>$request->Course_name,
            'credit_hours'=>$request->Credit_hours,
            'pre_req'=>$request->Pre_req,
           
        ]);
        if($create){
            return redirect('/course')->with('message', 'submitted successfully');
        }
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
        if(request()->ajax())
        {
            $data = Course::findOrFail($id);
            return response()->json(['data' => $data]);
        }
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       
        $rules = array(
            'course_code'    =>  'required',
            'course_name'     =>  'required',
            'credit_hours'     =>  'required',
            'pre_req'          =>   'required'
            
        );
        $error = Validator::make($request->all(), $rules);
        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }
        $form_data = array(
            'course_code'       =>   $request->course_code,
            'course_name'        =>   $request->course_name,
            'credit_hours'        =>   $request->credit_hours,
            'pre_req'                =>   $request->pre_req
           
        );
        Course::whereId($request->hidden_id)->update($form_data);
        $form_data['id']= $request->hidden_id;
            return response()->json(['success' => $form_data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Course::findOrFail($id);
        $data->delete();
       
        }
   
}
