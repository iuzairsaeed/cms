<?php

use App\Post;
use App\User;   
use App\Role;
use App\Country;
use App\Photo; 
use App\Tag;
use App\Video; 
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     return "Hi About Page";
// });

// Route::get('/contact', function () {
//     return "Hi Contact";
// });

// Route::get('/post/{id}/{name}',function($id,$name){
//     return "This is post no ". $id . " and my name is ". $name;
// });

// Route::get('/admin/posts/example', array('as'=>'admin.home' , function(){

//     $url = route('admin.home');

//     return "this url is :". $url;

// }));

// Route::get('/post/{$id}' , 'PostsController@index');


// Route::resource('posts' , 'PostsController');



// Route::get('contact' , 'PostsController@contact');

// Route::get('post/{id}/{name}/{password}' , 'PostsController@show_post');

/*
|--------------------------------------------------------------------------
| Database Raw SQL Queries
|--------------------------------------------------------------------------
*/

// Route::get('/insert', function(){

//     DB::insert('insert into posts(title,content) values(?,?)' , ['Laravel awsome with uzair' , 'Laravel is the best thing that has happened to PHP']);

// });

// Route::get('/read' , function(){

//     $result = DB::select('select * from posts where id=?',[1]);

//     return $result;
//     // foreach($result as $res){

//     //     echo $res->title;
//     //     echo $res->content;
//     //     echo $res->is_admin;

//     // }

// });

// Route::get('/update' , function(){

//     $updated = DB::update('update posts set title="Updated title" where id = ?', [1]);

//     return $updated;

// });

// Route::get('/delete', function(){
    
//     $deleted = DB::delete('delete from posts where id=?', [1]);
//     return $deleted;

// });

/*
|--------------------------------------------------------------------------
| ELOQUENT ORM
|--------------------------------------------------------------------------
*/

// Route::get('/read' , function(){

//     $posts = Post::all();

//     foreach($posts as $post){
//         return $post->title; 
//     }


// });

// Route::get('/find', function(){

//     $posts = Post::find(2);

//     return $posts->title;

//     // foreach($posts as $post){
//     //     return $post->title;
//     // }

// });

// Route::get('/findwhere', function(){


//     $posts = Post::where('id', 3)->orderBy('id' , 'desc')->take(1)->get();

//     return $posts;

// });

// Route:get('/findmore', function(){

//     // $posts = Post::findOrFail(2);

//     // return $posts;

//     $posts = Post::where('users_count' , '<' , 50)->firstOrFail();
    
//     return $posts;

// });


// Route::get('/basicinsert' , function(){

//     // $post = Post::find(2);

//     $post = new Post;

//     $post->title = "New FIND then   title inserted";
//     $post->content = "Wow NOooo";

//     $post->save();


// });

// Route::get('/basicinsert' , function(){

//     $post = Post::find(2);

//     $post->title = "New FIND then   title inserted";
//     $post->content = "Wow NOooo";

//     $post->save();


// });

// Route::get('/create' , function(){

//     Post::create(['title'=>'the create method' , 'content'=>'WOW I\'am learning alot with admwin diaz ']);

// });

// Route::get('/update' , function(){

//     Post::where('id',2)->where('is_admin', 0)->update(['title'=>'NEW PHP TITLE' , 'content'=>'I love Instructor Edwin.']);

// });

// Route::get('delete' , function(){

//     $posts = Post::find(2);

//     $posts->delete();

// });

// Route::get('/delete2' , function(){
    
//     Post::destroy([4,6]);

// });

// Route::get('/softdelete' , function(){

//     Post::find(3)->delete();

// });

// Route::get('/readsoftdelete' , function(){

    // $post = Post::find(1);

    // return $post; 

    // $post = Post::withTrashed()->where('is_admin',0)->get();
    // return $post; 


//     $post = Post::onlyTrashed()->where('is_admin',0)->get();
//     return $post; 

// });


// Route::get('/restore' , function(){

//     $post = Post::onlyTrashed()->where('is_admin',0)->restore();
//     return $post;

// });

// Route::get('/forcedelete' , function(){

//     Post::onlyTrashed()->where ('is_admin',0)->forceDelete();

// });


/*
|--------------------------------------------------------------------------
| ELOQUENT Relationships
|--------------------------------------------------------------------------
*/

// One to One Relationship
// Route::get('/user/{id}/post' , function($id){

//     return User::find($id)->userHasOnePost->title;

// });

// Route::get('/post/{id}/user', function($id){

//     return Post::find($id)->user->name;

// });


// // -------------ONE TO MANY RELATIONSHI{P}----------

// //Edwin Code For one to many Relationship
// Route::get('/posts' , function(){


//     $user = User::find();

//     foreach($user->userHasManyPost as $post){

//         echo $post->title. "<br>";
    
//     }


// });

// //My Code for One to Many Reslaionship
// Route::get('/user/{id}/posts' , function($id){


//     $posts = User::find($id)->userHasManyPost;

//     foreach($posts as $post){

//         echo $post->title . "<br>";
    
//     }


// });

// // //--------------MANY TO MANY RELATIONSHI{P}
// // // MY CODE
// Route::get('/user/{id}/role' , function($id){

//     $user = User::find($id);

//     foreach($user->roles as $role){

//         //return $role;
//         return $role->name;

//     }
    
// });


//--------------------------------------------
// // // Edwin Code
  
// Route::get('/users/{id}/role' , function($id){

//     $users = User::find($id)->roles()->get();

//     foreach($users as $user){
//         return $user->name;
//     }

//     //return $user;
    
//     // // $users = User::find($id);
    
//     // // foreach($user->roles as $role){

//     // //     return $role->name;

//     // // }
    
// });

// //-----------------------------------------------
// // My Code for pivot access
// Route::get('/role/{id}/user' , function($id){

// //  // $roles = Role::find($id)->userRole()->get();
// //  // return $role;

//     $roles = Role::find($id);

//     foreach($roles->userRole as $role){
//         echo $role->name."<br>";
//     }


// });

//-----------------Now Edwin code for pivot access
// Route::get('user/pivot', function(){
//     $user = User::find(1);
//     foreach($user->roles as $role){

//         echo $role;

//     }
// });
// //==========================
// //My code for Country has Many user and many post
// Route::get('user/country' , function(){
    
//     $country =  Country::find(7)->posts;
//     return $country;
//     //foreach($country->posts as $post ){
//       //  return $post->title;
//     //}
// });
// //==================================
// // Now Edwin code for  country has many through post and user
// Route::get('user/country' , function(){
    
//     $country =  Country::find(1);
//     foreach($country->posts as $post){
//        echo $post->title."<br>";
//     }
// });

// //========================
// //======POLYPORMHIC RELATION
// // // GET uSER DIsplAY PHOTO
// Route::get('user/{id}/photos', function($id){

//     $user = User::find($id);

//     foreach($user->photo as $photo){
//         echo $photo->path;
//     }
    
// });
// // // GET USER POST PHOTO
// Route::get('post/{id}/photos', function($id){

//     $post = Post::find($id);

//     foreach($post->photo as $photo){
//         echo $photo->path."<br>";
//     }
    
// });


// // //GET USER BY FINDing his Photo
// #My way to get photo post
// Route::get('/photo/{id}',function($id){
//     $photo = Photo::findOrFail($id);
//     echo $photo->path."<br>";
// });

// // //GET USER BY FINDing his Photo
// #EDWIN WAY TO GET Photo user/owner
// Route::get('/photo/{id}/user',function($id){
//     $photo = Photo::findOrFail($id);
//     echo $photo->imageable."<br>";
// });

// #=====================================
// # MANY TO MANY POLYMORPHIC RELATIONSHI{P}
// # Edwin COde :( For find Tag on posts)
// Route::get('post/tag' , function() {
//     $post = Post::find(3);
//     return $post->tags;
//     // foreach($post->tags as $tag){
//     //     echo $tag->name;
//     // }
// });

// #MY CODE :) FOR FINDING  TAG ON VIDEO
// Route::get('video/tag' , function (){
//     $video = Video::find(4);
//     return $video->tags;
// });
// # FIND POST BY TAG ID 
// Route::get('tag/post' , function (){
//     $tag = Tag::find(3);
//     // return $tag;
//     foreach($tag->posts as  $post){
//         echo $post;
//     }
// });
#========================================
#========================================


/*
|--------------------------------------------------------------------------
| CRUD APPLICATION
|--------------------------------------------------------------------------
*/
// Route::resource('/posts' , 'PostsController');

Route::group(['middleware'=>'web'], function(){
    
    Route::resource('/posts' , 'PostsController');




    Route::get('/date' , function(){
        $date = new DateTime('+1 week');
        echo $date->format('D, d-m-Y');
        echo '<br>';
        
        echo Carbon::now()->addDays(1)->diffForHumans();
        echo '<br>';

        echo Carbon::now()->addDays(10)->diffForHumans();
        echo '<br>';

        echo Carbon::now()->subMonth(1)->diffForHumans();
        echo '<br>';

        echo Carbon::now()->yesterday()->diffForHumans();
        echo '<br>';

        echo Carbon::now()->yesterday();
        echo '<br>';
    });

    Route::get('/getname' , function(){
        $user = User::find(1);
        echo $user->name;
    });

    Route::get('/setname' , function(){
        $user = User::find(1);
        $user->name = 'uzair';
        $user->save();
    });

});










 




































