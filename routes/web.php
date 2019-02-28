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


Route::match(['get', 'post'], '/botman', 'BotManController@handle');
Route::get('/botman/tinker', 'BotManController@tinker');


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

Route::get('lessons', function () {
    return view('lessons');
});
Route::get('erga', function () {
    return view('erga');
});
Route::get('research', function () {
    return view('research');
});
Route::get('chat', function () {
    return view('chat');
});

Route::get('/first', function () {
    $posts = App\Post::all();
    return view('first',  compact('posts'));
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/meetus', function () {
    return view('meetus');
});

Route::get('post/{slug}', function($slug){
	$post = App\Post::where('slug', '=', $slug)->firstOrFail();
	return view('post', compact('post'));
});
/*
Route::get('/posts', function () {
    $posts = App\Post::all();
    return view('posts', compact('posts'));
});
*/
