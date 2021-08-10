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
//     return view('welcome');
// });

Route::get('/', 'SiteController@index');
Route::get('/create-student', 'SiteController@createStudentPage');
Route::post('//student-data-handler', 'SiteController@studentDataHandler');








// Route::get('/contact', 'SiteController@contact');
// Route::get('/header', 'SiteController@header');
// Route::post('/contact', 'SiteController@contactHandler');
