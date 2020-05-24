<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomePageController@index');

Route::get('/{id}/{name?}', function ($id, $name="codepro") {
    return "Id : $id, Name : $name";
})->where('id', '[0-9]+');

Route::get('/world', 'HelloController@hello');
Route::get('/add', 'AddController@index');

Route::get('/about', ['uses'=>'AboutController@about', 'as'=>'about']);