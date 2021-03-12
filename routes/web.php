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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('frontend.header');
});


Route::get('/admin', function () {
    return view('backend.layouts.includes');
});

Route::get('/menu-category/index','Menu\Categorycontroller@index');
Route::get('/menu-category/create','\App\Http\Controllers\Menu\Categorycontroller@create');
Route::post('/menu-category/insert','Menu\Categorycontroller@store');
Route::get('/menu-category/{id}/edit','Menu\Categorycontroller@edit');
Route::post('/menu-category/{id}','Menu\Categorycontroller@update');
Route::post('/menu-category-delete/{id}','Menu\Categorycontroller@destroy');




Route::get('/menu/index','Menu\MenuController@index');
Route::get('/menu/create','Menu\MenuController@create');
Route::post('/menu/insert','Menu\MenuController@store');




Route::get('/menu/','Home\HomeController@index');





