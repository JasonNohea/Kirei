<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompController extends Controller
{
    public function hpCompany(){
        return view('hpcompany'); //buka file hometalent.php di resource/views
    }
    public function compProject(){
        return view('companyproject'); //buka file companyproject.php di resource/views
    }
    public function jobPosting(){
        return view('jobposting'); //buka file jobposting.php di resource/views
    }
}
