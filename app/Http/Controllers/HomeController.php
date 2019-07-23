<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.index');
        
    }
    public function register(){
        return view('admin.register');
    }
    public function store(Request $request){
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'statut' => 'required',
            'password' => 'required|confirmed|min:6',
           
        ];
        $error = Validator::make($request->all(), $rules);

if($error->fails()) {
  
    return redirect()->route('admin.register')
            ->withErrors($error)
            ->withInput();
} else {
    $new_user = [
        'name' => $request->name,
        'email' => $request->email,
        'statut' => $request->statut,
        'password' => Hash::make($request->password),
    ];
   User::create($new_user);
   return view('pages.index');

}

    }
}
