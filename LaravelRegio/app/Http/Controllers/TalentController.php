<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use App\Models\Talent;
use App\Models\City;
use App\Models\Province;
use Illuminate\Support\Facades\Storage;

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

    public function registerTalent(){
        return view('registalent'); //buka file detailjob.php di resource/views
    }

    //Register Company Form
    public function createTalent()
    {
        $cities = City::select('id', 'city_name')->get();
        $provinces = Province::select('id', 'province_name')->get();
        //dd($provinces);
        return view('registalent', compact('cities', 'provinces'));
    }


    public function store(Request $request)
    {
        //dd($request);

        //return $request;
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender'=>'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'phone_number' => 'required',
            'birth_date'=>'required|date',
            'province_id' => 'required',
            'city_id' => 'required',

            'cv'=>'nullable',
            'portofolio'=>'nullable',
        ]);
        // Store the user data
        $user = User::create([
            'user_type' => 'talent',
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'phone_number' => $validatedData['phone_number'],

        ]);

        $cv = null;
        $portofolio=null;

        // Create the company record
        $talent = Talent::create([
            'user_id' => $user->id,
            'gender'=>$validatedData['gender'],
            'birth_date'=>$validatedData['birth_date'],
            'province_id' => $validatedData['province_id'],
            'city_id' => $validatedData['city_id'],
        ]);

        return redirect()->route('homeTalent')->with('success', 'User and Company created successfully.');
    }
}
