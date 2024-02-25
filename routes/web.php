<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('index');
});

Route::get('contact-us', function () {
    return view('contact');
});



Route::group(['namespace' =>'App\Http\Controllers', 'prefix' => 'admin'], function () {
    Route::get('home', 'Homecontroller@index')->name('home.page');
    Route::get('create', 'HomeController@create')->name('create.page');
    Route::get('create', 'HomeController@create')->name('student.create');
    Route::get('student-delete/{id}', 'HomeController@delete')->("student.delete");
    Route::get('student-store','HomeController@store')->name('students-store');


});