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


Route::get('/','HomeController@index');


Route::get('/about',function(){
    return view('frontEnd.about');

});
Route::get('/pricing',function(){
    return view('frontEnd.pricing');
});
Route::get('/blog',function(){
    return view('frontEnd.blog');
});

Route::get('/contact',function(){
    return view('frontEnd.contact');
});
Route::get('/doctor',function(){
    return view ('frontEnd.doctor');
});
Route::get('/departments',function(){
    return view('frontEnd.departments');
});
