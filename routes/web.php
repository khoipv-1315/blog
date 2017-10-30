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
use App\Task;
use App\User;
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tasks', 'TaskController@index');
Route::get('/tasks/search', 'TaskController@search');
Route::post('/task', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');
Route::get('/tasks/{id}/edit', 'TaskController@edit')->name('edit');
Route::post('/tasks/{id}/update', 'TaskController@update')->name('update');

