<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; 
use App\Models\Post; 
use App\Models\category;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'ekayudinata', 
            'username' =>'ekayudinata',
            'email' => 'ekayudinata@gmail.com',
            'password' => bcrypt("Password")
        ]);

        User::factory(10)->create();
        
 
        // User::create([
        //     'name' => 'madediana', 
        //     'email' => 'made@gmail.com',
        //     'password' => Hash::make("password")
        // ]);
        // User::create([
        //     'name' => 'yudi', 
        //     'email' => 'yudinata@gmail.com',
        //     'password' => Hash::make("password")
        // ]);
        
        category::create([
            'name' =>'web programing', 
            'slug' => 'web-programing'
        ]);

        category::create([
            'name' =>'personal blog', 
            'slug' => 'personal-blog'
        ]);

        category::create([
            'name' =>'mobile programing', 
            'slug' => 'mobile-programing'
        ]);

        Post::factory(25)->create(); 

        // Post::create([
        //     "title" =>'Post yang pertama', 
        //     'category_id' => '1', 
        //     'user_id' => '1', 
        //     'slug' => 'post-yang-pertama', 
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc scelerisque viverra mauris in aliquam', 
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc scelerisque viverra mauris in aliquam. Hac habitasse platea dictumst vestibulum rhoncus. Etiam tempor orci eu lobortis elementum nibh. Tellus at urna condimentum mattis pellentesque id. Augue neque gravida in fermentum et. Semper risus in hendrerit gravida rutrum quisque. Ultrices tincidunt arcu non sodales neque sodales. Arcu felis bibendum ut tristique. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae. Tortor at auctor urna nunc id. Lorem ipsum dolor sit amet consectetur adipiscing elit ut. Amet nisl purus in mollis nunc sed id semper risus. Viverra accumsan in nisl nisi scelerisque eu ultrices vitae auctor. Dolor sed viverra ipsum nunc. Ultrices dui sapien eget mi proin. Arcu non odio euismod lacinia at quis risus sed. Dolor sit amet consectetur adipiscing elit duis. Orci ac auctor augue mauris augue neque. Convallis convallis tellus id interdum velit. Et odio pellentesque diam volutpat commodo sed egestas egestas. Aenean pharetra magna ac placerat vestibulum lectus mauris ultrices. Cum sociis natoque penatibus et magnis dis parturient montes nascetur. Nibh cras pulvinar mattis nunc sed blandit libero. Odio euismod lacinia at quis risus. Nibh tellus molestie nunc non blandit massa enim. Enim blandit volutpat maecenas volutpat blandit aliquam etiam erat velit. Dolor purus non enim praesent elementum facilisis leo vel fringilla. Consequat semper viverra nam libero justo laoreet sit amet. Et leo duis ut diam quam nulla porttitor massa id. Ornare lectus sit amet est placerat in egestas erat imperdiet. Turpis cursus in hac habitasse. Tempor id eu nisl nunc. Ut venenatis tellus in metus. Mattis pellentesque id nibh tortor id aliquet lectus. Augue interdum velit euismod in pellentesque.Suspendisse ultrices gravida dictum fusce ut placerat orci. Vitae elementum curabitur vitae nunc sed. Adipiscing commodo elit at imperdiet dui. Luctus venenatis lectus magna fringilla urna porttitor rhoncus dolor. Viverra justo nec ultrices dui sapien eget mi proin sed. Augue ut lectus arcu bibendum at varius vel pharetra vel. Diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Ornare arcu odio ut sem nulla pharetra diam. Sed libero enim sed faucibus turpis. Phasellus egestas tellus rutrum tellus pellentesque.'
        // ]);

        // Post::create([
        //     "title" =>'Post yang kedua', 
        //     'category_id' => '1', 
        //     'user_id' => '2', 
        //     'slug' => 'post-yang-kedua', 
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc scelerisque viverra mauris in aliquam', 
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc scelerisque viverra mauris in aliquam. Hac habitasse platea dictumst vestibulum rhoncus. Etiam tempor orci eu lobortis elementum nibh. Tellus at urna condimentum mattis pellentesque id. Augue neque gravida in fermentum et. Semper risus in hendrerit gravida rutrum quisque. Ultrices tincidunt arcu non sodales neque sodales. Arcu felis bibendum ut tristique. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae. Tortor at auctor urna nunc id. Lorem ipsum dolor sit amet consectetur adipiscing elit ut. Amet nisl purus in mollis nunc sed id semper risus. Viverra accumsan in nisl nisi scelerisque eu ultrices vitae auctor. Dolor sed viverra ipsum nunc. Ultrices dui sapien eget mi proin. Arcu non odio euismod lacinia at quis risus sed. Dolor sit amet consectetur adipiscing elit duis. Orci ac auctor augue mauris augue neque. Convallis convallis tellus id interdum velit. Et odio pellentesque diam volutpat commodo sed egestas egestas. Aenean pharetra magna ac placerat vestibulum lectus mauris ultrices. Cum sociis natoque penatibus et magnis dis parturient montes nascetur. Nibh cras pulvinar mattis nunc sed blandit libero. Odio euismod lacinia at quis risus. Nibh tellus molestie nunc non blandit massa enim. Enim blandit volutpat maecenas volutpat blandit aliquam etiam erat velit. Dolor purus non enim praesent elementum facilisis leo vel fringilla. Consequat semper viverra nam libero justo laoreet sit amet. Et leo duis ut diam quam nulla porttitor massa id. Ornare lectus sit amet est placerat in egestas erat imperdiet. Turpis cursus in hac habitasse. Tempor id eu nisl nunc. Ut venenatis tellus in metus. Mattis pellentesque id nibh tortor id aliquet lectus. Augue interdum velit euismod in pellentesque.Suspendisse ultrices gravida dictum fusce ut placerat orci. Vitae elementum curabitur vitae nunc sed. Adipiscing commodo elit at imperdiet dui. Luctus venenatis lectus magna fringilla urna porttitor rhoncus dolor. Viverra justo nec ultrices dui sapien eget mi proin sed. Augue ut lectus arcu bibendum at varius vel pharetra vel. Diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Ornare arcu odio ut sem nulla pharetra diam. Sed libero enim sed faucibus turpis. Phasellus egestas tellus rutrum tellus pellentesque.'
        // ]);
        // Post::create([
        //     "title" =>'Post yang ketiga', 
        //     'category_id' => '1', 
        //     'user_id' => '3', 
        //     'slug' => 'post-yang-ketiga', 
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc scelerisque viverra mauris in aliquam', 
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc scelerisque viverra mauris in aliquam. Hac habitasse platea dictumst vestibulum rhoncus. Etiam tempor orci eu lobortis elementum nibh. Tellus at urna condimentum mattis pellentesque id. Augue neque gravida in fermentum et. Semper risus in hendrerit gravida rutrum quisque. Ultrices tincidunt arcu non sodales neque sodales. Arcu felis bibendum ut tristique. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae. Tortor at auctor urna nunc id. Lorem ipsum dolor sit amet consectetur adipiscing elit ut. Amet nisl purus in mollis nunc sed id semper risus. Viverra accumsan in nisl nisi scelerisque eu ultrices vitae auctor. Dolor sed viverra ipsum nunc. Ultrices dui sapien eget mi proin. Arcu non odio euismod lacinia at quis risus sed. Dolor sit amet consectetur adipiscing elit duis. Orci ac auctor augue mauris augue neque. Convallis convallis tellus id interdum velit. Et odio pellentesque diam volutpat commodo sed egestas egestas. Aenean pharetra magna ac placerat vestibulum lectus mauris ultrices. Cum sociis natoque penatibus et magnis dis parturient montes nascetur. Nibh cras pulvinar mattis nunc sed blandit libero. Odio euismod lacinia at quis risus. Nibh tellus molestie nunc non blandit massa enim. Enim blandit volutpat maecenas volutpat blandit aliquam etiam erat velit. Dolor purus non enim praesent elementum facilisis leo vel fringilla. Consequat semper viverra nam libero justo laoreet sit amet. Et leo duis ut diam quam nulla porttitor massa id. Ornare lectus sit amet est placerat in egestas erat imperdiet. Turpis cursus in hac habitasse. Tempor id eu nisl nunc. Ut venenatis tellus in metus. Mattis pellentesque id nibh tortor id aliquet lectus. Augue interdum velit euismod in pellentesque.Suspendisse ultrices gravida dictum fusce ut placerat orci. Vitae elementum curabitur vitae nunc sed. Adipiscing commodo elit at imperdiet dui. Luctus venenatis lectus magna fringilla urna porttitor rhoncus dolor. Viverra justo nec ultrices dui sapien eget mi proin sed. Augue ut lectus arcu bibendum at varius vel pharetra vel. Diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Ornare arcu odio ut sem nulla pharetra diam. Sed libero enim sed faucibus turpis. Phasellus egestas tellus rutrum tellus pellentesque.'
        // ]);
        // Post::create([
        //     "title" =>'Post yang keempat', 
        //     'category_id' => '2', 
        //     'user_id' => '3', 
        //     'slug' => 'post-yang-keempat', 
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc scelerisque viverra mauris in aliquam', 
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc scelerisque viverra mauris in aliquam. Hac habitasse platea dictumst vestibulum rhoncus. Etiam tempor orci eu lobortis elementum nibh. Tellus at urna condimentum mattis pellentesque id. Augue neque gravida in fermentum et. Semper risus in hendrerit gravida rutrum quisque. Ultrices tincidunt arcu non sodales neque sodales. Arcu felis bibendum ut tristique. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae. Tortor at auctor urna nunc id. Lorem ipsum dolor sit amet consectetur adipiscing elit ut. Amet nisl purus in mollis nunc sed id semper risus. Viverra accumsan in nisl nisi scelerisque eu ultrices vitae auctor. Dolor sed viverra ipsum nunc. Ultrices dui sapien eget mi proin. Arcu non odio euismod lacinia at quis risus sed. Dolor sit amet consectetur adipiscing elit duis. Orci ac auctor augue mauris augue neque. Convallis convallis tellus id interdum velit. Et odio pellentesque diam volutpat commodo sed egestas egestas. Aenean pharetra magna ac placerat vestibulum lectus mauris ultrices. Cum sociis natoque penatibus et magnis dis parturient montes nascetur. Nibh cras pulvinar mattis nunc sed blandit libero. Odio euismod lacinia at quis risus. Nibh tellus molestie nunc non blandit massa enim. Enim blandit volutpat maecenas volutpat blandit aliquam etiam erat velit. Dolor purus non enim praesent elementum facilisis leo vel fringilla. Consequat semper viverra nam libero justo laoreet sit amet. Et leo duis ut diam quam nulla porttitor massa id. Ornare lectus sit amet est placerat in egestas erat imperdiet. Turpis cursus in hac habitasse. Tempor id eu nisl nunc. Ut venenatis tellus in metus. Mattis pellentesque id nibh tortor id aliquet lectus. Augue interdum velit euismod in pellentesque.Suspendisse ultrices gravida dictum fusce ut placerat orci. Vitae elementum curabitur vitae nunc sed. Adipiscing commodo elit at imperdiet dui. Luctus venenatis lectus magna fringilla urna porttitor rhoncus dolor. Viverra justo nec ultrices dui sapien eget mi proin sed. Augue ut lectus arcu bibendum at varius vel pharetra vel. Diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Ornare arcu odio ut sem nulla pharetra diam. Sed libero enim sed faucibus turpis. Phasellus egestas tellus rutrum tellus pellentesque.'
        // ]);
        // Post::create([
        //     "title" =>'Post yang kelima', 
        //     'category_id' => '2', 
        //     'user_id' => '1', 
        //     'slug' => 'post-yang-kelima', 
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc scelerisque viverra mauris in aliquam', 
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nunc scelerisque viverra mauris in aliquam. Hac habitasse platea dictumst vestibulum rhoncus. Etiam tempor orci eu lobortis elementum nibh. Tellus at urna condimentum mattis pellentesque id. Augue neque gravida in fermentum et. Semper risus in hendrerit gravida rutrum quisque. Ultrices tincidunt arcu non sodales neque sodales. Arcu felis bibendum ut tristique. Pretium vulputate sapien nec sagittis aliquam malesuada bibendum arcu vitae. Tortor at auctor urna nunc id. Lorem ipsum dolor sit amet consectetur adipiscing elit ut. Amet nisl purus in mollis nunc sed id semper risus. Viverra accumsan in nisl nisi scelerisque eu ultrices vitae auctor. Dolor sed viverra ipsum nunc. Ultrices dui sapien eget mi proin. Arcu non odio euismod lacinia at quis risus sed. Dolor sit amet consectetur adipiscing elit duis. Orci ac auctor augue mauris augue neque. Convallis convallis tellus id interdum velit. Et odio pellentesque diam volutpat commodo sed egestas egestas. Aenean pharetra magna ac placerat vestibulum lectus mauris ultrices. Cum sociis natoque penatibus et magnis dis parturient montes nascetur. Nibh cras pulvinar mattis nunc sed blandit libero. Odio euismod lacinia at quis risus. Nibh tellus molestie nunc non blandit massa enim. Enim blandit volutpat maecenas volutpat blandit aliquam etiam erat velit. Dolor purus non enim praesent elementum facilisis leo vel fringilla. Consequat semper viverra nam libero justo laoreet sit amet. Et leo duis ut diam quam nulla porttitor massa id. Ornare lectus sit amet est placerat in egestas erat imperdiet. Turpis cursus in hac habitasse. Tempor id eu nisl nunc. Ut venenatis tellus in metus. Mattis pellentesque id nibh tortor id aliquet lectus. Augue interdum velit euismod in pellentesque.Suspendisse ultrices gravida dictum fusce ut placerat orci. Vitae elementum curabitur vitae nunc sed. Adipiscing commodo elit at imperdiet dui. Luctus venenatis lectus magna fringilla urna porttitor rhoncus dolor. Viverra justo nec ultrices dui sapien eget mi proin sed. Augue ut lectus arcu bibendum at varius vel pharetra vel. Diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Ornare arcu odio ut sem nulla pharetra diam. Sed libero enim sed faucibus turpis. Phasellus egestas tellus rutrum tellus pellentesque.'
        // ]);

    }
}
