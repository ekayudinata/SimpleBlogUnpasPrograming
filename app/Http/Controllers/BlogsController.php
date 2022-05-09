<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post; 

class BlogsController extends Controller
{
    public function index(){

        $title = ""; 
        if(request('category')){
            $category = category::firstWhere('slug', request('category')); 
            $title = "in ". $category->name; 
        }

        if(request('author')){
            $user= User::firstWhere('username', request('author')); 
            $title = "by ". $user->name; 
        }
       
        return view('posts',[
            "title"=>"All Posts ".$title,
            "active" =>"blog", 
            // "list_post" => Post::all()
        
            // "list_post" => Post::latest()->get() this method is dont good enugh to remove N+1 problem
            "list_post" => Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString()
        ]);

        // with(['category','user'])->
    }

    public function showMoreData(Post $post){
        return view('post', 
        [
            "title"=>"Post", 
            "active" =>"blog", 
            "post" => $post
        ]); 
    }
}
