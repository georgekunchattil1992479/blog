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
    return view('admin.index');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| It contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more
|
*/

Route::group(['middleware' => ['web']], function(){   //The CategoryController works in the following manner. category->controller->index->category->index.blade.php

    Route::resource('category', 'CategoryController');
});
