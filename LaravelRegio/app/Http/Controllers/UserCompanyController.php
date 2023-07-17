<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;

class UserCompanyController extends Controller
{
    public function createCompany()
    {
        return view('formCreateCompany');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_type' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'phone_number' => 'required',
            'company_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'province' => 'required',
            'number_of_employee' => 'required|integer',
            'profile_photo' => 'required',
        ]);

        // Store the user data
        $user = User::create([
            'user_type' => $validatedData['user_type'],
            'first_name' => $validatedData['first_name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'phone_number' => $validatedData['phone_number'],
        ]);

        // Store the company data
        $company = Company::create([
            'user_id' =>$user->id,
            'city_id' => '1', // Replace with the actual city ID
            'province_id' => '1', // Replace with the actual province ID
            'company_name' => $validatedData['company_name'],
            'address' => $validatedData['address'],
            'city' => $validatedData['city'],
            'province' => $validatedData['province'],
            'number_of_employee' => $validatedData['number_of_employee'],
           // 'profile_photo' => $validatedData['profile_photo']->store('profile_photos', 'public'),
        ]);

        return redirect()->route('users.store')->with('success', 'User and Company created successfully.');
    }
}
