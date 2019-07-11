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
use Illuminate\Support\Facades\DB;
use App\Exports\EnrollmentExport;

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

    public function studentsrelated(Request $request)
    {
       
        $attendances = Enrollment::where([
            'enrollsemester' => $request->semester,
            'degree' => $request->degree,
            'session' => $request->session,
            'section' => $request->section,
            'course_name' => $request->subject
        ])->first();

        if ($attendances != null) {

            $view = view('Attendence.partial._studentlist', compact('attendances'))->render();
            return response()->json(['students' => $view]);
        } else {
            return response()->json(['errors' => "we don't have student with this Criteria"]);
        }
    }
    public function reportselect(Request $request)
    {
        $critairia = [
            'enrollsemester' => $request->semester,
            'degree' => $request->degree,
            'session' => $request->session,
            'section' => $request->section,
            'course_name' => $request->subject
        ];
        $enroll = DB::table('enrollments')->where($critairia)->first();
        $enrolldata = ["0" =>$enroll];
        if ($enroll == null) $enrolldata = Enrollment::where('id', 0);
        return datatables()->of($enrolldata)
        ->addColumn('action', function ($data) {
            if (isset($data->id)) {
                
                $button = '<a type="button" href="/attendence/export/'.$data->id .'" name="export" id="' . $data->id . '" class="export btn btn-success btn-sm"><i class="fa fa-file-excel-o"></i>
                Export in excel</a>';
                return $button;
            }
        }
        )->addColumn('attendence', function($data) {
            $colum= '<input type="radio" name="attendence" value="P"> Present';
            $colum.='<input type="radio" name="attendence" value="A">  Absent';
            return $colum;
        })
        ->rawColumns(['attendence','action'])
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
