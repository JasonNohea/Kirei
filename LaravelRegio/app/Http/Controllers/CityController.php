<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function create()
    {
        return view('formCity');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'city_name' => 'required',
        ]);

        $cityNames = preg_split("/[\r\n]+/", $validatedData['city_name']);

        $cities = [];
        foreach ($cityNames as $name) {
            $cities[] = ['city_name' => $name];
        }

        City::insert($cities);

        return redirect()->route('city.create')->with('success', 'Cities added successfully.');
    }
}
