<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CustomController extends Controller
{
    public function index()
    {
        return view("login");
    }
    public function login(Request $request)
    {
//          $credentials=$request->only('email','password');
        $request->validate([
            'aa'=>'required',
            'password'=>'required',
        ]);
      if(is_numeric($request->aa))
      {
          if(Auth::attempt(['phone'=>$request->aa,'password'=>$request->password])) {
              return redirect()->route('home');
          }
      }else{
          if(Auth::attempt(['email'=>$request->aa,'password'=>$request->password])){
              return redirect()->route('home');
          }
      }
        return $request;
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
