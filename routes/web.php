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
Route::get('/', function () {
    //関数viewはresources/viewの中身を返す
    return view('welcome');
});

//↑ 