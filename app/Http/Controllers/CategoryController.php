<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('listcategories',[
            "title" => "list category ", 
            "active"=>"categories", 
            "categories" => category::all()
        ]); 
    }
}
