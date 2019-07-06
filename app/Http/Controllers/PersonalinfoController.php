<?php

namespace App\Http\Controllers;

use App\Personalinfo;
use Illuminate\Http\Request;
use App\studentinfo;
class PersonalinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=studentinfo::all();

        return view('enrollment.studentRegistration.personalinfo',compact('students'));
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
        $create=Personalinfo::create([
            'St_id'=>$request->st_id,
            'blood_group'=>$request->blood_group,
            'martial_status'=>$request->martial_status,
            'family_doctor'=>$request->family_doctor,
            'hostel_required'=>$request->hostel_required,
            'transport_required'=>$request->transport_required,
            'hostel_granted'=>$request->hostel_granted,
            'transport_granted'=>$request->transport_granted,
            'addmission_granted'=>$request->addmission_granted,
            'hobbies'=>$request->hobbies,
            'ailment'=>$request->ailment,
            'influence_person'=>$request->influence_person,
            'faculity_hec'=>$request->faculity_hec,
            'personality_point'=>$request->personality_point,
            'foriegn_visit'=>$request->foriegn_visit,
            
        ]);
        if($create){
            return redirect('/personalinfo')->with('message', 'submitted successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personalinfo  $personalinfo
     * @return \Illuminate\Http\Response
     */
    public function show(Personalinfo $personalinfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personalinfo  $personalinfo
     * @return \Illuminate\Http\Response
     */
    public function edit(Personalinfo $personalinfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personalinfo  $personalinfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personalinfo $personalinfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personalinfo  $personalinfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personalinfo $personalinfo)
    {
        //
    }
}
