<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function landing(){
        return view('lputama'); //buka file lputama.php di resource/views
    }
    public function lp_talent(){
        return view('lptalent'); //buka file lptalent.php di resource/views
    }
    public function home_talent(){
        return view('hometalent'); //buka file hometalent.php di resource/views
    }
    public function aboutpg(){
        return view('about'); //buka file hometalent.php di resource/views
    }
}
