<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function index(){
        return view('register.index', [
            'title' => 'Register New Account', 
            'active'=> 'register'
        ]); 
    }

    public function store(Request $request){
     $validateData = $request->validate([
            "name" => 'required|max:255', 
            "username" => ['required','min:5','max:255', 'unique:users', 'not_regex:/[^a-zA-Z0-9_.-]/'], // unique:users is mean validated unique username in table users, table users base on myphp admin
            "email" => ['required', 'email:dns', 'unique:users'], 
            "password" => "required|min:5|max:255"  
        ]); 
    
        // encrypt data never running when validate data is error
        $validateData['password'] = bcrypt($validateData['password']); 
        User::create($validateData); 

        // $request->session()->flash('status', 'Register successful! please login ');
        // return redirect('/login')

        return redirect('/login')->with('status', 'Register successful! please login '); 

    }
}
