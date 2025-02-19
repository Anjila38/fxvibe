<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;
use App\Models\Contact;


class ContactController extends Controller
{
    public function contactPage(){
        $randomNumber = rand(1000000, 10000000);
        return view('contact', compact('randomNumber'));
    }
    public function submitdata(Request $request){
        $request -> validate([
            'name' => 'required',
            'ref' => 'required',
            'number' => 'required',
            'address' => 'required',
            'dog_breed' => 'required',
            'gender' => 'required',
            'date' => 'required',
        ]);
        Contact::create([
        'name' =>$request->name,
        'address' => $request->address,
        'number' => $request->number,
        'date' => $request->date,
        'ref' => $request->ref,
        'dog_breed' => $request->dog_breed,
        'gender' => $request->gender,
    ]);
    return redirect(route('home'));

    }
   
   
}
