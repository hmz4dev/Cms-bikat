<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Session;
use App\Degree;
use App\OfferedCourse;
use Illuminate\Http\Request;
use App\Enrollment;
use Illuminate\Support\Facades\DB;
use App\Exports\EnrollmentExport;
use Illuminate\Support\Facades\Auth;
use MercurySeries\Flashy\Flashy;
class AttendanceController extends Controller
{

    public $studentreport;
    public function __construct()
    {
        $this->studentreport = null;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $students=studentinfo::all();
        $sessions = Session::all();
        $degrees = Degree::all();
        // $decipline=Decipline::all();
        $OfferedCourses = OfferedCourse::all();
        return view('Attendence.attendence', compact('sessions', 'degrees', 'OfferedCourses'));
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
      //  dd($request->data);
foreach ($request->data as $key => $value) {
    if ($value != null) {
        
        $enrollment  = Enrollment::whereId($request->data[$key]["value"])->first();
        $attendancedata []= [
            'teacher_id' => Auth::user()->id,
            'degree'     => $enrollment->degree,
            'semester'     => $enrollment->enrollsemester,
            'subject'     => $enrollment->course_name,
            'name'     => $enrollment->student_name,
            'enrollment_id'     => $enrollment->id,
            'regno'     => $enrollment->Regno,
            'attendance'     => $request->data[$key]['val'],
        ];
    }
}

        
        $hasenroll = Attendance::where('enrollment_id', $request->enrollment)->first();
        if ($hasenroll == null) {
            foreach ($attendancedata as $attendan) {
                
                Attendance::create($attendan);
            }
            Flashy::success('You have been seccessfuly add attendance.');
        } else {
            $hasenroll->update($attendancedata);
            
            Flashy::success('You have been update attendance.');
        }
         $sessions = Session::all();
         $degrees = Degree::all();
         $OfferedCourses = OfferedCourse::all();
         return response()->json(['done' => 'store action done']);
        

    

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

    public function studentsrelated(Request $request)
    {
       
        $attendances = Enrollment::where([
            'enrollsemester' => $request->semester,
            'degree' => $request->degree,
            'session' => $request->session,
            'section' => $request->section,
            'course_name' => $request->subject
        ])->get();

        if ($attendances->count() > 0) {

            $view = view('Attendence.partial._studentlist', compact('attendances'))->render();
            return response()->json(['students' => $view]);
        } else {
            return response()->json(['errors' => "we don't have student with this Criteria"]);
        }
    }
    public function reportselect(Request $request)
    {
        $critairia = [
            'semester' => $request->semester,
            'degree' => $request->degree,
            'subject' => $request->subject
        ];
        $enroll = DB::table('attendances')->where($critairia);
        // $enrolldata = ["0" =>$enroll];
        // if ($enroll == null) $enrolldata = Enrollment::where('id', 0);
        return datatables()->of($enroll)
        ->addColumn('action', function ($data) {
          
        }
        
        )->addColumn('attendences', function($data) {
            $colum= $retVal = ($data->attendance == "P") ? "Present" : "Absent";
            return $colum;
        })
        ->rawColumns(['attendences'])
        ->make(true);
       
$dataenrollment = Enrollment::where($critairia)->first();
    
      return response()->json(['data' => $dataenrollment]);
    }

    public function report(Request $request)
    {
      
        $sessions = Session::all();
        $degrees = Degree::all();
        $OfferedCourses = OfferedCourse::all();

        return view('Attendence.report
        ', compact('sessions', 'degrees', 'OfferedCourses'));
    }

    public function export(Request $request) 
    {
      
        return (new EnrollmentExport($request->id))->download('Attendence'.$request->id.'.xlsx');
    }
}
