<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{

    use HasFactory, Sluggable;
    protected $guarded = ['id']; 
    protected $with =['category','user']; 

    public function scopeFilter($query, array $filter){
        
        //*--- if there is fillter with search, get all search data or when silter search is empty retur false --*
        // if(isset($filter['search']) ? $filter['search'] : false){ 
        //  return   $query ->where('title','like','%'. $filter['search'].'%')
        //           ->orWhere('body','like','%'. $filter['search'].'%'); 
        // }

        //search method before move requet to controller
        // if(request('search')){
        //     return   $query ->where('title','like','%'.request('search').'%')
        //              ->orWhere('body','like','%'.request('search').'%'); 
        //    }

     

        $query->when($filter['search'] ?? false, function($query, $search){
        
            return $query ->where(function( $query) use ($search){
                $query ->where('title','like','%'. $search.'%')
                      ->orWhere('body','like','%'. $search.'%'); 
            } ); 
            // return   $query ->where('title','like','%'. $search.'%')
            //       ->orWhere('body','like','%'. $search.'%'); 
        }); 

       

        $query->when($filter['category'] ?? false, function($query, $category){
        
            return  $query ->whereHas('category', function($query) use ($category){
                    $query ->where('slug',$category); 
            }); 
        });

        // ******************call back function************
        // $query->when($filter['author'] ?? false, function($query, $author){
        //     return  $query ->whereHas('user', function($query) use ($author){
        //             $query ->where('username',$author); 
        //     }); 
        // });

        // ******************arrow function *****************
        $query->when($filter['author'] ?? false, fn($query, $author)=>
            $query->whereHas('user', fn($query)=>
                $query->where('username', $author)    
            )
        ); 
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    
    public function category(){
        return $this->belongsTo(Category::class); 
    }
    public function user(){
        return $this->belongsTo(User::class); 
    }

    public function getRouteKeyName()
    {
       return 'slug';
    }
}
