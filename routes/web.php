<?php

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
    return view('welcome');
});

/*Route::get('/about', function () {
    $tasks = DB::table('tasks')->get();

   return view('about', compact('tasks'));
});*/
/*
Route::get('/tasks', function () {
   $tasks = DB::table('tasks')->latest()->get();
   return view('tasks',compact('tasks'));
});*/

Route::get('/about', "About\AboutController@index");



/*Route::get('/tasks/show/{id}', function ($id) {
   $task = App\Task::find($id);
   return view('show',compact('task'));
});*/

Route::get('/tasks', "TasksController@index");
//wild card name {*wildcard} must match parameter name
Route::get('/tasks/show/{task}', "TasksController@show");


Route::get('/posts','Posts\PostsController@index');
Route::get('/posts/create', "Posts\PostsController@create");
Route::get('/posts/{slug}', "Posts\PostsController@show");
Route::post('/posts',"Posts\PostsController@store");
Route::post('/posts/{slug}/edit',"Posts\PostsController@edit");
Route::post('/posts/{id}/comments', "Comments\CommentsController@store");
Route::get('/projects/create','Projects\ProjectsController@create');
Route::post('/projects','Projects\ProjectsController@store');




Route::get('/test/', function() {
   return "1";
});

Route::get('/skills/',function() {
    return ['HTML', 'CSS', "JavaScript", 'jQuery', 'Angular', 'React', 'PHP', 'C#'];
});

Route::post('/test/', function() {

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/vue',function(){
    return view('vue');
});