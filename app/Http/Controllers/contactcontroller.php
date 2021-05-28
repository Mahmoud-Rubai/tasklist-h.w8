<?php

namespace App\Http\Controllers;
use App\Models\contact;
use Illuminate\Http\Request;

class contactcontroller extends Controller
{

    public function index(){
        $contacts = contact::all();

        return view('contact-list',compact('contacts'));

    }
    public function contact(){
        return view('contact');
    }

    public function store(Request $request){
    $contact = new contact;

    $contact->fName =$request->firstName;
    $contact->lName =$request->lastName;
    $contact->email =$request->email;

    $contact->save();
return redirect()->back();
    }
}
