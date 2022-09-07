<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Dashboard\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
  
    //
    public function register($subdomain) {

        return view('admin.auth.register');
    }

    public function userPostRegistration($subdomain,Request $request) {


    }
    public function login(Request $request){
       
        return view('admin.auth.login');
    }
    public function postLogin(LoginRequest $request)
    {
       
      
        $validated= $request->validated();


       if(Auth::guard('admin')->attempt($validated)) {
            return redirect()->route('index');
        }
   
        
        return redirect()->route('admin.auth.login')->with('error', __('trans.invalid email or password.'));


    }
    public function logout()
    {
        Auth::logout();
        return response()->json([
            'status' => 'success',
            'message' => 'Successfully logged out',
        ]);
    }

}
