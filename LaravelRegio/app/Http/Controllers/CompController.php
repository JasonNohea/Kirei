<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompController extends Controller
{
    public function hpCompany(){
        return view('hpcompany'); //buka file hometalent.php di resource/views
    }
}
