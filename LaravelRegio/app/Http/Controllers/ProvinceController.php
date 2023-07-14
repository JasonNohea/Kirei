<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function create()
    {
        return view('formProvince');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'province_name' => 'required',
        ]);

        $provinceNames = preg_split("/[\r\n]+/", $validatedData['province_name']);

        $provinces = [];
        foreach ($provinceNames as $name) {
            $provinces[] = ['province_name' => $name];
        }

        Province::insert($provinces);

        return redirect()->route('provinces.create')->with('success', 'Provinces created successfully.');
    }
}
