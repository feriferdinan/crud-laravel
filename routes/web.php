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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('about', function () {
// 	$nama = 'Septian Feri Ferdinan';
//     return view('about',['nama' => $nama]);
// });

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/mahasiswa', 'MahasiswaController@index');

Route::get('/students', 'StudentController@index');
Route::get('/students/create', 'StudentController@create');
Route::post('/students', 'StudentController@store');
Route::get('/students/{student}', 'StudentController@show');