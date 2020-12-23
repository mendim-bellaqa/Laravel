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
    $name = "<script>document.location = 'http://google.com';</script>";

   
    return view('welcome', [
        "name" => $name
    ]);

});
Route::get('/hack', function () {
    $name = "<script>document.location = 'http://google.com';</script>";
   
    return view("hack", [
        "name" => $name
    ]);

})->name('hack');
