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

Route::get('/about', 'AboutController@index');
Route::get('todos', 'TodosController@index');
Route::get("todos/{todo}", 'TodosController@show');
Route::get('todos/{todo}/edit', 'TodosController@update');
Route::get('create-todo', 'TodosController@create');
Route::post('store', 'TodosController@store');
Route::get('todos/{todo}/edit', 'TodosController@update');
Route::post('/todos/{todo}/update-todo', 'TodosController@update_todo');
Route::get('todos/{todo}/delete', 'TodosController@delete');
