<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|*/


Route::get('/', function () {
    return view('index');
   // return ("Hey there!!!");
});
Route::get('/welcome', function () {
    return view('welcome');
    // return ("Hey there!!!");
});


/*
Route::get('/about', function () {
    //return view('welcome');
    return ("Hey there from about page!!!");
});

Route::get('/contact', function () {
    //return view('welcome');
    return ("Hey there from contact page!!!");
});
*/
Route::get('/post/{id}/{name}', function ($id,$name) {
    //return view('welcome');
    return ("The post number is "). $id . " ". $name;
});
/*
Route::get('admin/post/examples', array('as'=> 'admin.home' ,function(){
    $url= route('admin.home');

    return ("This page is") . " ". $url;

}));

*/

//Route:: get('/post', 'PostController@index');

//Route::get('/get/{id}','PostController@create');

//Route::resource('post','PostController');

Route::get('/insert', function(){




});
Route::auth();

Route::get('/home', 'HomeController@index');





Route::get('/admin', function(){

    return view ('admin.index');

});
Route::auth();

Route::group(['middleware'=> 'admin'], function(){

    Route::resource('/admin/users', 'AdminUsersController');
    Route::resource('/admin/posts', 'AdminPostsController');
    Route::resource('/admin/categories','AdminCategoriesController');
    Route::resource('/admin/media', 'AdminMediasController');

});

Route::get('/home', 'HomeController@index');

Route::get('contact', function(){

    return view ('contact');
});
Route::auth();

Route::get('/home', 'HomeController@index');
