<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



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
    $user = new User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->username = $request->username;
    $user->phoneNumber = $request->phone;
    $user->password = Hash::make($request->password);

    $saveUser = $user->save();

    if($saveUser){
        return view('index') ->with ('message', 'User Saved successfully.')->with('status', true);
    }
    else{
        return view('index') ->with ('Error occurred', 'Error occurred, Please try again.')->with('status', false);
    }
    // return $request->name;

    
}
}

