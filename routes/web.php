<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title"=>"Home",
        "active" =>"home", 
        "name" =>"Wayan Eka Yudinata", 
        "email" =>"MadeDiana20@gmail.com", 
        "jurusan"=>"Sistem Komputer"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title"=>"About",
        "active" =>"about", 
        "name" =>"Wayan Eka Yudinata", 
        "email" =>"MadeDiana20@gmail.com", 
        "jurusan"=>"Sistem Komputer"
    ]);
});

Route::get('/categories',[CategoryController::class, 'index']);

Route::get('/blog', [BlogsController::class,'index']);

Route::get('/post/{post:slug}',[BlogsController::class,'showMoreData']); 
Route::get('/categories/{category:slug}',function(category $category){
    return view('categories',[
            'title'=>"Posts by category: $category->name", 
            'posts'=>$category->post->load(['user','category']), 
            'category'=>$category->name
    ]); 
} ); 

Route::get('/authors/{user:username}', [AuthorController::class, 'showListPost']); 
// Route::get('/authors/{user:id}', function(User $user){
//     $cek = $user->posts; 
//     @dd($cek); 
//     return view('listPostByUser',[
//             'title'=>$user->name, 
//             'listPost'=>$user->posts
        
//     ]); 
// } ); 

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest'); // login page only for user not yet authenticatied 
Route::post('/login',[LoginController::class,'aunthenticate'] );
Route::post('/logout',[LoginController::class,'logout']  );
Route::get('/register',[RegisterController::class, 'index'])->middleware('guest'); 
Route::post('/register',[RegisterController::class, 'store']); 

Route::get("/dashboard",function(){
    return view('dashboard.index',[
        'title' => 'Dashboard', 
        'active' =>"Dashboard", 
    ]); 
} )->middleware('auth'); //this code mean dashboard page can only access by user has been authenticatied  

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth'); 
// Route::get('/dashboard/posts/edit/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth'); 
Route::resource("/dashboard/posts",DashboardPostController::class)->middleware('auth'); 
Route::resource('/dashboard/categories', AdminCategoryController::class)->except(['show'])->middleware('admin');
Route::get('/dashboard/categories/checkSlug',[AdminCategoryController::class, "checkSlug"] )->middleware('admin');
