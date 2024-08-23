<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('Hello');
    return 'Hello welcome';
   
});

// Route::get('/about', function () {
//     return 'About page';
   
// });

// Route::get('/contact', function () {
//     return 'Contact page';
   
// });

// Route::get('/post/{id}/{name}', function ($id,$name) {
//     return 'This is number'.$id." ".$name;
   
// });


// Route::get('admin/posts/exemple', array('as'=>'admin.home', function(){
//     $url = route('admin.home');
  
//     return "This url is"." ".$url;
// }));

//Route::get('/post/{id}','App\Http\Controllers\PostsController@index');

//Route::resource('post','App\Http\Controllers\PostsController');

Route::get('/contact','App\Http\Controllers\PostsController@contact');

Route::get('post/{id}/{name}/{password}','App\Http\Controllers\PostsController@show_post');


