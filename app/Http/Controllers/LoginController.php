<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        request()->session()->regenerateToken();

        $token = csrf_token();
        
        return view('login', ['_token' => $token]);
    }
    public function loginSubmit(Request $request){
        $valivationdata = $request->validate([
            'fullName' => 'required|regex:/^([A-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚÛÝĂÂĐÊÔƠƯẠẢĂẶẬẲẮẴẸẺẼẾỀỂỄỊỈỌỎƠỚỜỞỢỤỦỨỪỬỮÝỲỴỶỸ][a-zàáâãèéêìíòóôõùúûýăâđêôơưạảăặậẳắẵẹẻẽếềểễịỉọỏơớờởợụủứừửữýỳỵỷỹ]*)(\s[A-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚÛÝĂÂĐÊÔƠƯẠẢĂẶẬẲẮẴẸẺẼẾỀỂỄỊỈỌỎƠỚỜỞỢỤỦỨỪỬỮÝỲỴỶỸ][a-zàáâãèéêìíòóôõùúûýăâđêôơưạảăặậẳắẵẹẻẽếềểễịỉọỏơớờởợụủứừửữýỳỵỷỹ]*)*$/',
            'email'=>'required|regex:/[a-zA-Z0-9.*%±]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}/',
            'password'=>'required|min:6'
        ]);
        $token=$request->input('_token');
        $fullname=$request->input('fullName');
        $email=$request->input('email');
        $password=$request->input('password');
        return "Tên: ".$fullname ."<br>Email: ". $email ."<br>Password: ".$password ."<br>Token: ".$token;
        }
}
