<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class AuthController extends Controller
{
    //
           // Show the login page
           public function show()
           {
               return view('auth.login');
           }
       
           // Handle login
           public function login(Request $request)
           {
      
            $email = $request->email;
            $password = $request->password;
            $credentials =    ["email" => $email, "password" => $password];
            // $password = Hash::make($request->newPassword);

            
            //  dd($password);
            if (Auth::attempt($credentials)) {
                //connected
                $request->session()->regenerate();
                return to_route("dashbord")->with("success","Vous etes bien connecte   ". $email ."  .");
            }else{
                //not connected
                return back()->withErrors([
                    "email"=> "Email ou mot de pass incorrect."
    
                ])->onlyInput(  "email");
            }
           }
       
           // Handle logout
           public function logout()
           {
            Session::flush();
          
            Auth::logout();
    
           return to_route('login')->with("success","Vous etes bien deconnecte");
           }
}
