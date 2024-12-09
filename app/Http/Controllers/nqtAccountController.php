<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nqtAccountController extends Controller
{
    public function nqtlogin(){
        return view('nqt-login');
    }
    public function nqtloginsubmit(request $request){
        $valivationdata = $request->validate([
            'nqt-email'=>'required|regex:/[a-zA-Z0-9.*%±]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,}/',
            'nqt-password'=>'required|min:6'
        ]);
        $data = $request->all();
        $email = $data['nqt-email'];
        $password = $data['nqt-password'];

        $nqtLoginSession = [
            'nqt-email' => $email,
            'nqt-password' => $password
        ];
        $nqt_json = json_encode($nqtLoginSession);
        if($email == "nqtam@gmail.com" && $password == "123456"){
            $request -> session()->put('K23CNT1_NguyennQuangTam', $email, $password);
            return redirect('/');
        }
        return redirect()->back()-> with('nqt-error', 'Lỗi đăng nhập');

    }
}
