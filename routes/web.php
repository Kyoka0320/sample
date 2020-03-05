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

//Route::get(どのURL、何をするか);
// どのURL、何をするのか決めるのが（ルーティング）の仕事

use App\Http\Controllers\CommentController;

Route::get('/', function () {
    //関数viewはresources/viewの中身を返す
    return view('welcome');
});

//↑

//urlを作成
Route::get('/list', 'TaskController@index');
Route::get('/comment', 'CommentController@index');
Route::get('/comment/create', 'CommentController@create');
Route::post('/comments/store', 'CommentController@store');
Route::get('/followers','FollowerController@index');
Route::get('/tasks/create', 'TaskController@create');
Route::post('/tasks/store', 'TaskController@store');

// 編集画面を決めるための
// {] IDが入るから
Route::get('/tasks/{task}/edit', 'TaskController@edit')->name('tasks.edit');

// taskからupdateを呼ばれる
//
Route::put('/tasks/{task}/update','TaskController@update')->name('tasks.update');

Route::delete('/tasks/{task}/delete', 'TaskController@delete')->name('tasks.delete');
