<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome() { 
        // Your logic here 
        return view('welcome'); 
       } 


}
