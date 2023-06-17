<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontViewController extends Controller
{
    // redirects view to home

    public function welcome(){

        return view('welcome');

    }

}
