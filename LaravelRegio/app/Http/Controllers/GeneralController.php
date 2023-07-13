<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function aboutTalent(){
        return view('aboutTalent'); //buka file about.php di resource/views
    }
    public function aboutComp(){
        return view('aboutComp'); //buka file about.php di resource/views
    }
    public function cthForm(){
        return view('contohform'); //buka file about.php di resource/views
    }
}
