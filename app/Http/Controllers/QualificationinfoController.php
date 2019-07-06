<?php

namespace App\Http\Controllers;

use App\qualificationinfo;
use Illuminate\Http\Request;
use App\studentinfo;
class QualificationinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        //
        $students=studentinfo::all();

        return view('enrollment.studentRegistration.Qualification',compact('students'));
       
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
           if(!empty($row['Degree']))
           {
            $records []=array(
                'st_id'=>$student,
                'degree'=>$row['Degree'],
                'from_date'=>$row['From_date'],
                'to_date'=>$row['To_date'],
                'institute_attended'=>$row['Institute_attended'],
                'uni_board'=>$row['Uni_board'],
                'obtain_marks'=>$row['Obtain'],
                'total_marks'=>$row['Total_marks'],
                'percentage'=>$row['Percentage'],
                'grade'=>$row['Grade'],
                'cgpa'=>$row['Cgpa'],
                'marit'=>$row['Marit'],
                'doc_checklist'=>$row['Doc_checklist'],
                'copies'=>$row['Copies']
 
            );
           };
           
     }
    
     Qualificationinfo::insert($records);


     
  /*      $create=studentinfo::create([
            'st_id'=>$request->st_id,
            'degree'=>$request->degree,
            'from_date'=>$request->from_date,
            'to_date'=>$request->to_date,
            'institute_attended'=>$request->institute_attended,
            'obtain_marks'=>$request->obtain_marks,
            'total_marks'=>$request->total_marks,
            'percentage'=>$request->percentage,
            'grade'=>$request->grade,
            'cgpa'=>$request->cgpa,
            'marit'=>$request->marit,
            'doc_checklist'=>$request->doc_checklist,
            'copies'=>$request->copies,
    
        ]);
   */
        
            return redirect('Qualification')->with('message', 'submitted successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\qualificationinfo  $qualificationinfo
     * @return \Illuminate\Http\Response
     */
    public function show(qualificationinfo $qualificationinfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\qualificationinfo  $qualificationinfo
     * @return \Illuminate\Http\Response
     */
    public function edit(qualificationinfo $qualificationinfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\qualificationinfo  $qualificationinfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, qualificationinfo $qualificationinfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\qualificationinfo  $qualificationinfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(qualificationinfo $qualificationinfo)
    {
        //
    }
}
