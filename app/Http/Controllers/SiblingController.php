<?php

namespace App\Http\Controllers;

use App\Sibling;
use Illuminate\Http\Request;
use App\studentinfo;
class SiblingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=studentinfo::all();
      return view('enrollment.studentRegistration.sibling',compact('students'));
      
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
        $student=$request->row[0]['St_id'];
        $rows =$request->input('row');
     foreach($rows as $row)
     {
           if(!empty($row['Name']))
           {
            $records []=array(
                'st_id'=>$student,
                'name'=>$row['Name'],
                'relation'=>$row['Relation'],
                'age'=>$row['Age'],
                'edudept'=>$row['Edudept'],
                'examdept'=>$row['Examdept'],
                'degree'=>$row['Degree'],
                'remarks'=>$row['Remarks']
 
            );
           };
           
     }
    
     Sibling::insert($records);

     return redirect('siblings')->with('message', 'submitted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sibling  $sibling
     * @return \Illuminate\Http\Response
     */
    public function show(Sibling $sibling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sibling  $sibling
     * @return \Illuminate\Http\Response
     */
    public function edit(Sibling $sibling)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sibling  $sibling
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sibling $sibling)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sibling  $sibling
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sibling $sibling)
    {
        //
    }
}
