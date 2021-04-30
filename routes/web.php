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

/*Route::get('/', function () {
    return view('teacher.teacher');
});*/


Route::get('/', function () {
    return view('acceuil');
});
/*
route pour la table teacher
Route::get('teacher', 'TeacherController@index');
Route::get('teacher/create', 'TeacherController@create');
Route::post('teacher', 'TeacherController@store');
Route::get('teacher/{id}/edit', 'TeacherController@edit');
Route::put('teacher/{id}', 'TeacherController@update');
Route::get('teacher/{id}', 'TeacherController@destroy');
*/

#route pour promo
Route::get('promo', 'PromoController@index');
Route::get('promo/create', 'PromoController@create');
Route::post('promo', 'PromoController@store');
Route::get('promo/{id}/edit', 'PromoController@edit');
Route::put('promo/{id}', 'PromoController@update');
Route::get('promo/{id}', 'PromoController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
