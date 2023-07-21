<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use App\Models\Company;
use App\Models\City;
use App\Models\Province;
use Illuminate\Support\Facades\Storage;


//Website URL Controller
class CompController extends Controller
{
    //Company routes pages
    public function hpCompany()
    {
        return view('hpcompany'); //buka file hometalent.php di resource/views
    }
    public function compProject()
    {
        return view('companyproject'); //buka file companyproject.php di resource/views
    }
    public function jobPosting()
    {
        return view('jobposting'); //buka file jobposting.php di resource/views
    }
    public function projectDetail()
    {
        return view('companyprojectdetail'); //buka file projectDetail.php di resource/views
    }
    public function companyProfile()
    {
        return view('companyprofile'); //buka file companyProfile.php di resource/views
    }
    public function companyTalentProfile()
    {
        return view('company-talentprofile'); //buka file companytalentprofile.php di resource/views
    }
    public function rgtComp()
    {
        return view('registercompany'); //buka file about.php di resource/views
    }

    //Register Company Form
    public function createCompany()
    {
        $cities = City::select('id', 'city_name')->get();
        $provinces = Province::select('id', 'province_name')->get();
        return view('formCreateCompany', compact('cities', 'provinces'));
    }
    

    public function store(Request $request)
    {
        //dd($request);
        
        //return $request;
        $validatedData = $request->validate([
            'user_type' => 'required',
            'city_id'=>'required',
            'province_id'=>'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'phone_number' => 'required',
            'company_name' => 'required',
            'address' => 'required',
            'position' => 'required',
            'number_of_employee' => 'required',
           
            'profile_photo' => 'nullable|image',
        ]);
        //dd($validatedData);

    // Store the user data
    $user = User::create([
        'user_type' => $validatedData['user_type'],
        'first_name' => $validatedData['first_name'],
        'last_name' => $validatedData['last_name'],
        'email' => $validatedData['email'],
        'password' => bcrypt($validatedData['password']),
        'phone_number' => $validatedData['phone_number'],
    ]);
    //dd($validatedData);

    $profile_photo = null;
    if($request->file('profile_photo')){
       $profile_photo = $request->file('profile_photo')->store('company_pfp');
    }

//dd($profile_photo);
    // Create the company record
    $company = Company::create([
        'user_id' =>$user->id,
        'city_id' => $validatedData['city_id'], // Replace with the actual city ID
        'province_id' => $validatedData['province_id'], // Replace with the actual province ID
        'company_name' => $validatedData['company_name'],
        'address' => $validatedData['address'],
        'position' => $validatedData['position'],
        'number_of_employee' => $validatedData['number_of_employee'],
       'profile_photo' => $profile_photo,
    ]);
    //dd($validatedData);
    
    return redirect()->route('createCompany')->with('success', 'User and Company created successfully.');
        
    }
}