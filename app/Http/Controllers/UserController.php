<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
public function index(){

   $name = 'JOSH BAM';
   $school = "SQI";

    // The with method;
    return view('index')->with("name", $name);
    
    // The compact method;
    return view('index', compact($name, $school));
    
    // The direct method;
    return view('index', ['name' => $name,
     'school' => $school
     ]
    );
}

public function register(Request $request) {
    return $request->name;
}
}

