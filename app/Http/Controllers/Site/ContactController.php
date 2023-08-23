<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function contact(Request $request){
    return view('contact');
    }
 // Store Contact Form data
 public function store(Request $request) {

    // Form validation
    $this->validate($request, [
        'contact_name' => 'required',
        'contact_email' => 'required|email',
        //'contact_phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        'contact_subject'=>'required',
        'contact_message' => 'required'
     ]);

    //  Store data in database
    Contact::create($request->all());

    // 
    return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
}

}
