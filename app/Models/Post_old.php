<?php

namespace App\Models;


class Post 
{
   private static $list_post = [
        [
            "title" =>"Post I", 
            "slug" => "Post-I", 
            "author" =>"Eka yudinata", 
            "body"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Molestiae ducimus voluptas neque ipsum nisi tempora iste illum, minima a! 
            Eos non porro delectus unde quasi alias quae obcaecati inventore dolore!"
        ], 
        [
            "title" =>"Post II", 
            "slug" => "Post-II", 
            "author" =>"Eka yudinata", 
            "body"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Molestiae ducimus voluptas neque ipsum nisi tempora iste illum, minima a! 
            Eos non porro delectus unde quasi alias quae obcaecati inventore dolore!"
        ], 
        [
            "title" =>"Post III", 
            "slug" => "Post-III", 
            "author" =>"Eka yudinata", 
            "body"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Molestiae ducimus voluptas neque ipsum nisi tempora iste illum, minima a! 
            Eos non porro delectus unde quasi alias quae obcaecati inventore dolore!"
        ], 
        [
            "title" =>"Post IV", 
            "slug" => "Post-IV", 
            "author" =>"Eka yudinata", 
            "body"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Molestiae ducimus voluptas neque ipsum nisi tempora iste illum, minima a! 
            Eos non porro delectus unde quasi alias quae obcaecati inventore dolore!"
        ], 
        [
            "title" =>"Post V", 
            "slug" => "Post-V", 
            "author" =>"Eka yudinata", 
            "body"=>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Molestiae ducimus voluptas neque ipsum nisi tempora iste illum, minima a! 
            Eos non porro delectus unde quasi alias quae obcaecati inventore dolore! Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Molestiae ducimus voluptas neque ipsum nisi tempora iste illum, minima a! 
            Eos non porro delectus unde quasi alias quae obcaecati inventore dolore! Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Molestiae ducimus voluptas neque ipsum nisi tempora iste illum, minima a! 
            Eos non porro delectus unde quasi alias quae obcaecati inventore dolore! Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Molestiae ducimus voluptas neque ipsum nisi tempora iste illum, minima a! 
            Eos non porro delectus unde quasi alias quae obcaecati inventore dolore!"
        ]
    ]; 

    public static  function all(){
        return collect(self::$list_post); //collect change normal arrya to be power full array
    }

    public static function find($slug){
        $new_post = static::all(); 
        $show_post = $new_post->firstWhere('slug', $slug); 

        // $listpost = static::all(); 
        // foreach(self::$list_post as $post){
        //     if($post['slug'] === $slug)
        //         $new_post = $post;  
        // }
        // @dd($new_post->firstWhere('slug',$slug)); 
        return $show_post; 
    }
}
