<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TalentController extends Controller
{
    public function landing(){
        return view('lputama'); //buka file lputama.php di resource/views
    }
    public function lp_talent(){
        return view('lptalent'); //buka file lptalent.php di resource/views
    }
    public function home_talent(){
        return view('hptalent'); //buka file hptalent.php di resource/views
    }

}
