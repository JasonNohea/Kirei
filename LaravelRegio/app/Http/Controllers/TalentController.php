<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TalentController extends Controller
{
    public function landing(){
        return view('lputama'); //buka file lputama.php di resource/views
    }
    public function lpTalent(){
        return view('lptalent'); //buka file lptalent.php di resource/views
    }
    public function homeTalent(){
        return view('hptalent'); //buka file hptalent.php di resource/views
    }
    public function detailJob(){
        return view('detailjobtalent'); //buka file detailjob.php di resource/views
    }

}
