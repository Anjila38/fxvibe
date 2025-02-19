<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function AboutPage(){
        return view('about');
    }

    public function submit(Request $request){
        $request -> validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'date' => 'required',
            'time' => 'required',
            'color' => 'required',
            'password' => 'required',
            'email' => 'required',
            'state' => 'required',
            'country' => 'required',
        ]);

        About::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'date' => $request->date,
            'time' => $request->time,
            'color' => $request->color,
            'password' => $request->password,
            'email' => $request->email,
            'state' => $request->state,
            'country' => $request->country,
        ]);
        return redirect(route('home'));
    }
}
