<?php

use App\Models\Post as ModelsPost;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\MockObject\Generator\ClassIsFinalException;
use App\Models\Post;
use App\Models\User;

// Route::get('/', function () {
//     //return view('Hello');
//     return 'Hello welcome';
   
// });

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

// Route::get('/contact','App\Http\Controllers\PostsController@contact');

// Route::get('post/{id}/{name}/{password}','App\Http\Controllers\PostsController@show_post');

/*
Application Routes@
*/

// Route::get('/insert', function(){
//     DB::insert('insert into posts(title, content) values(?,?)',['Laravel is awsome with Edwin','Laravel is the best thing that has happen to PHP, PERIOD']);
//     echo "Record inserted successfully.<br/>";
//     echo '<a href = "/insert">Click Here</a> to go back.';
// });

// Route::get('/read', function(){
//     $results = DB::select('select* from posts where id = ?',[1]);
   
//     return var_dump($results);
//     // foreach($results as $post){
//     //     return $post->title;
//     //}
// });

// Route::get('/update',function(){
//    $updated = DB::update('update posts set title = "Update title" where id = ?', [1]);
//    return $updated;
// });

// Route::get('/delete',function(){
//     $delete = DB::delete('delete from posts where id = ?', [4]);
//     return $delete;
//  });

/*
ELOQUENT
*/

// Route::get('/find', function(){
//     $posts = Post::all();
   
//      foreach($posts as $post){
//         return $post->title;
//      }
// });

// Route::get('/findwhere', function(){
//    $posts = Post::where('id',3)->orderBy('id', 'desc')->take(1)->get();
//    return  $posts;
// });

// Route::get('/findmore', function(){
//     //  $posts = Post::findorFall(1);
//     //  return $posts;

//     $posts = Post::where('users_count', '<', 50)->firstorFail();

// });

// Route::get('basicinsert', function(){
//    $post = new Post;

//    $post->title = 'New Eloquent title insert';
//    $post->content = "Wow eloquent is really cool, look at his content";

//    $post->save();
// });

// Route::get('basicinsert2', function(){
//     $post = Post::find(2);
 
//     $post->title = 'New Eloquent insert 2';
//     $post->content = "Wow eloquent is really cool, look at his content 2";
 
//     $post->save();

//     echo "Record inserted successfully.<br/>";
//       echo '<a href = "/insert">Click Here</a> to go back.';
//  });

// Route::get('/create', function(){
//     Post::create(['title'=>'the create method', 'content'=> 'WOW I\'am learnig alot with Edwin Diaz']);
// });

// Route::get('/update', function(){
//     Post::where('id',2)->where('is_admin', 0)->update(['title'=>'NEW PHP TITLE', 'content'=> 'This is instructor']);
// });

// Route::get('/delete', function(){
//     $post = Post::find(1);
//     $post->delete();
// });

// Route::get('/delete2', function(){
//    Post::destroy([5,6]);
//    //Post::where('is_admin', 0)->delete();
// });

// Route::get('/softdelete', function(){
//    Post::find(2)->delete();
// });

// Route::get('/readsoftdelete', function(){
//     // $post = Post::find(7);
//     // return $post;

//     $post = Post::onlyTrashed()->where('id', 2)->get();

//     return $post;
//  });

// Route::get('/restore', function(){
//    Post::withTrashed()->where('is_admin', 0)->restore();

// });


// Route::get('/forcedelete', function(){
//    Post::withTrashed()->where('id', 2)->forcedelete();

// });

/*
ELOQUENT relationships
*/

// One to One relationship
// Route::get('/user/{id}/post', function($id){
        
//    return User::find($id)->post->content;

// });

// Inverse Relationship

// Route::get('/post/{id}/user', function($id){
//       return Post::find($id)->user->name;
// });

// One to Many

Route::get('/posts', function(){

   $user = User::find(2);

   foreach($user->posts as $post){
      echo $post->title. "</br>";
   }
});