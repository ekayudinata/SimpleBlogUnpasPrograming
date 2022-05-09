<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class AuthorController extends Controller
{

    public function showListPost(User $user){
        // $data =  $user->posts; 
        // @dd($data); 
        return view('listPostByUser', [
            'title' =>"Posts by Author: $user->name", 
            'listPost' => $user->posts->load(['user', 'category']), 
            'name' => $user->name
        ]); 
    }
}
