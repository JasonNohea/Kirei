<?php

namespace App\Http\Controllers;

use App\Models\Skills;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function create()
    {
        return view('contohform');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'skillname' => 'required',
        ]);
    
        $skillNames = preg_split("/[\r\n]+/", $validatedData['skillname']);
    
        $skills = [];
        foreach ($skillNames as $name) {
            $skills[] = ['skill_name' => $name];
        }
    
        Skills::insert($skills);
    
        return redirect()->route('skills.create')->with('success', 'Skills created successfully.');
    }
    
    
    
}

