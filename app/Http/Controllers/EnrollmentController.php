<?php

namespace App\Http\Controllers;

use App\Enrollment;

use App\Session;
use App\studentinfo;
use App\Course;
use App\CourseGroup;
use App\Degree;
use App\OfferedCourse;
use App\instructor;
use View;
use Illuminate\Http\Request;
class EnrollmentController extends Controller
{

    public  $students;
    public function __construct()
    {

        $this->students = new studentinfo();

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function studentEnroll(){
        return view('enrollment.studentEnroll');
    }
   // public function offeredCourses(){
     //   return view('enrollment.offeredCourses');
    //}
    public function enrollment(){
        return view('enrollment.enrollment');
    }
    public function index(Request $request)
    {
      
        $sessions=Session::all();
        $courses=Course::all();
        $CourseGroups=CourseGroup::all();
        $instructors=instructor::all();
        $degrees=Degree::all();
        $students = new studentinfo();
      
        return view('enrollment.studentEnroll',compact('sessions','CourseGroups','courses','instructors','degrees'));
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
                 
            $enrolldate=$request->row[0]['Enrolldate'];
            $enrollsemester=$request->row[0]['Enrollsemester'];
            $session=$request->row[0]['Session'];
            $degree=$request->row[0]['Degree'];
            $student_name=$request->row[0]['Student_name'];
            $father_name=$request->row[0]['Father_name'];
            $Regno=$request->row[0]['Regno'];
            $section=$request->row[0]['Section'];
            $approval=$request->row[0]['Approval'];
            $course_work=$request->row[0]['Course_work'];
            $synopsis=$request->row[0]['Synopsis'];
            $after_ceased=$request->row[0]['After_ceased'];
            $chalan_no=$request->row[0]['Chalan_no'];
            $chalan_amount=$request->row[0]['Chalan_amount'];
            $Remarks=$request->row[0]['Remarks'];
            $enroll_status=$request->row[0]['Enroll_status'];
            $rows =$request->input('row');
     foreach($rows as $row)
     {
           if(!empty($row['Course_name']))
           {
            $records []=array(
                'enrolldate'=>$enrolldate,
                'enrollsemester'=>$enrollsemester,
                'session'=>$session,
                'degree'=>$degree,
                'student_name'=>$student_name,
                'father_name'=>$father_name,
                'Regno'=>$Regno,
                'section'=>$section,
                'approval'=>$approval,
                'course_work'=>$course_work,
                'synopsis'=>$synopsis,
                'after_ceased'=>$after_ceased,
                'chalan_no'=>$chalan_no,
                'chalan_amount'=>$chalan_amount,
                'Remarks'=>$Remarks,
                'enroll_status'=>$enroll_status,
                'Course_name'=>$row['Course_name'],
                'course_type'=>$row['Course_type'],
                'course_status'=>$row['Course_Status'],
                'credit_hours'=>$row['Credit_hours'],
                'course_incharge'=>$row['Course_incharge'],
            );
           };

          
           
     }
    
     Enrollment::insert($records);

     return redirect('studentEnroll')->with('message', 'submitted successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function show(Enrollment $enrollment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function edit(Enrollment $enrollment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enrollment $enrollment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enrollment $enrollment)
    {
        //
    }



    /**
     * send father name 
     */

     public function spisifierStudent($name)
     {
       
              $student= studentinfo::where('name', $name)->first();
            if (!$student) {
                return response()->json(['errors' => $error->errors()->all()]);
            } else {
                
                return response()->json([
                    'fatherName' => $student->father_name,
                    'regNo'      => $student->reg_no,
                    'section'      => $student->section
                    ]);
            }
   
     }

     public function sessiondegree(Request $request)
     {
         
        $this->students=studentinfo::where('session', $request->session)
                             ->where('degree', $request->degree)
                            ->get();
                            return response()->json(['students' => $this->students]); 
     
     }


     public function relatedCourses(Request $request)
     {
         $CourseGroups=CourseGroup::all();
         $offeredcourses=OfferedCourse::where('semester', $request->semester)
         ->where('degree', $request->degree)
         ->get();
         $lent = $offeredcourses->count();
         $view = view('enrollment.partial._ctc', compact('lent', 'CourseGroups'))->render();
                            return response()->json(['courses' => $offeredcourses, 'ctc' => $view]); 
     }


    
}
