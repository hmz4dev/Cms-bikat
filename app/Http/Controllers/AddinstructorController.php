<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddinstructorController extends Controller
{
    //
    function instructor(){
        return view('enrollment.instructor');
    }
}
