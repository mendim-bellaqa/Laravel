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

Route::get('/', function () {
   
    return view('welcome');
});
Route::get('/test', function () {
       
    return view('test');
    
});
Route::get('/home', function () {
    
    return view('home');

});
Route::get('/services', function () {
  
    return view('services');

});
Route::get('/about', function () {
    
    return view('about');

});
Route::get('/contact', function () {
    
    return view('contact');

});



Route::get('/contact', [
    'uses' => 'ContactUsFormController@createForm'
]);

// Post form data
Route::post('/contact', [
    'uses' => 'ContactUsFormController@ContactUsForm',
    'as' => 'contact.store'
]);


