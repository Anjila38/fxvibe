<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Login;

class LoginController extends Controller
{
    public function LoginPage(){
        return view('login');
    }
    public function loginstore(Request $request){
        $request-> validate([
            'name' => "required",
            
            'email' => "required",
            'password' => "password",
        ]);

        Login::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect(route('home'));
    }

public function loginstore(Request $request)
{
    $credentials = [
        'email' => $request->email,
        'password' => $request->password,
    ];

    if ($request->email == null || $request->password == null) {
        return back()->with('emptyMsg', "Please fill all the empty user credentials !");
    } else {
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            session([
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,

            ]);
      
            return redirect(route('contact'));
        } else {
            return back()->with('failedMsg', "The user email or password doesn't match");
        }
    }
}}
