<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function RegisterSubmit(Request $request)
    {
        //valitation form
        $valivationdata = $request->validate([
            'user'=>'required|min:5|max:12',
            'password'=>'required|min:7|max:12',
            'name'=>'required|regex:/^[a-zA-Z\s]+$/',
            'address'=>'',
            'country'=>'required',
            'zipcode' => 'required|numeric',
            'email'=> 'required|email|regex:/[a-zA-Z0-9.*%±]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}/',
            'sex' => 'required|in:Male,Female',
            'language' => 'required|array',  // Yêu cầu rằng input phải là một mảng
            'language.*' => 'in:English,Vietnamese',  // Các phần tử trong mảng phải là 'English' hoặc 'Vietnamese'
        ]);
        $email = $request -> input('email');
        $password = $request -> input('password');
        return $email .' '. $password;
    }
}
