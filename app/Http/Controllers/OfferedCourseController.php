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
        //
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
}
