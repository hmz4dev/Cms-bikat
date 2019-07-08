<?php

namespace App\Http\Controllers;

use App\ReportStudent;
use App\studentinfo;
use App\Degree;
use App\Session;
use Illuminate\Http\Request;

class ReportStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=studentinfo::all();
        $Degrees=Degree::all();
        $sessions=Session::all();
        return view('reports.student',compact('students','Degrees','sessions'));
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
     * @param  \App\ReportStudent  $reportStudent
     * @return \Illuminate\Http\Response
     */
    public function show(ReportStudent $reportStudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReportStudent  $reportStudent
     * @return \Illuminate\Http\Response
     */
    public function edit(ReportStudent $reportStudent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReportStudent  $reportStudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ReportStudent $reportStudent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReportStudent  $reportStudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(ReportStudent $reportStudent)
    {
        //
    }
}
