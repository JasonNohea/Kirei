<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function aboutpg(){
        return view('about'); //buka file hometalent.php di resource/views
    }
}
