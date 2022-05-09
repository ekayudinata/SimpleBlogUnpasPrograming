<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\Storage;

class category extends Model
{
    use HasFactory,Sluggable;
    protected $guarded = ['id']; 
    public function post(){
        return $this->hasMany(Post::class); 
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public static function boot() {
        parent::boot();
        self::deleting(function($category) { // before delete() method call this
             $category->post()->each(function($post) {
                 
                if($post->image){
                    Storage::delete($post->image); 
                }
                $post->delete(); // <-- direct deletion
             });
        });
    }
}
