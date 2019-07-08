<?php

namespace App\Http\Controllers;

use App\instructor;
use Illuminate\Http\Request;
use Validator;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructors =instructor::paginate(8);
       
        return view('enrollment.instructor', compact('instructors'));
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
        $create=instructor::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'cellno'=>$request->cellno,
            'type'=>$request->type,
            'department'=>$request->department,
        ]);   
        if($create){
            return redirect('/instructor')->with('message', 'submitted successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function show(instructor $instructor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = instructor::findOrFail($id);
            return response()->json(['data' => $data]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       
        $rules = array(
            'name'    =>  'required',
            'email'     =>  'required | email',
            'cellno'     =>  'required',
            'type'     =>  'required',
            'department'     =>  'required',
        );
       
        $error = Validator::make($request->all(), $rules);
        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }

 
    $form_data = array(
        'name'       =>   $request->name,
        'email'        =>   $request->email,
        'cellno'        =>   $request->cellno,
        'type'        =>   $request->type,
        'department'            =>   $request->department
    );
   
    instructor::whereId($request->hidden_id)->update($form_data);
$form_data['id']= $request->hidden_id;
    return response()->json(['success' => $form_data]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = instructor::findOrFail($id);
        $data->delete();
    }
}
