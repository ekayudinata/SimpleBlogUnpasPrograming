<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Post;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // this is a basic method to make authorization 
        // if(auth()->guest() || auth()->user()->username !== 'ekayudinata'){
        //     abort(403); 
        // }

        // this is second method to makw authorization using gates fiture 
        $this->authorize('admin');
        
      return view('dashboard.categories.index', [
          'categories' => category::all()
      ]); 
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
        $validate = $request->validate([
            "name" => "required|max:255", 
            "slug" => "required|unique:posts"
        ]); 

        category::create($validate); 
        return redirect('/dashboard/categories')->with('success', 'New category has been added'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        category::destroy($id);
        return redirect('/dashboard/categories')->with('success', 'Category has been deleted'); 
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(category::class, 'slug', $request->title);
        return response()->json(['slug'=>$slug]); 
    }
}
