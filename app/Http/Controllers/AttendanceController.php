<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\studentinfo;
use App\Session;
use App\Degree;
use App\Decipline;
use App\OfferedCourse;
use Illuminate\Http\Request;
use App\Enrollment;
class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
       // $students=studentinfo::all();
        $sessions=Session::all();
        $degrees=Degree::all();
       // $decipline=Decipline::all();
        $OfferedCourses=OfferedCourse::all();
        return view('Attendence.attendence',compact( 'sessions','degrees','OfferedCourses'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function show(Attendance $attendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendance $attendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendance $attendance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendance $attendance)
    {
        //
    }

    public function studentsrelated(Request $request) {


        $students = Enrollment::where([
            'enrollsemester' => $request->semester,
            'degree' => $request->degree,
            'session' => $request->session,
            'section' => $request->section,
            'course_name' => $request->subject])->first();
        
            if ($students != null) {
                
                $view = view('Attendence.partial._studentlist', compact('students'))->render();
                return response()->json(['students' => $view]);
            } else {
                return response()->json(['errors' => "we don't have student with this Criteria"]);
            }
            
    }
}
