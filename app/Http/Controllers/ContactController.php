<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Contact;

class ContactController extends Controller
{
    
    /**
     * Store a contact message.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' =>  'required|max:100',
            'email' => 'required|max:100|email',
        ]);

        if ($validator->fails()) {
            return redirect('contact')->withErrors($validator)->withInput();
        }
        
        // Store the contact message.
        $contact = new Contact;
        $contact->name        = $request->name;
        $contact->email       = $request->email;
        $contact->subject     = $request->subject;
        $contact->message     = $request->message;
        $contact->created_at  = now();
        $contact->save();
        return redirect()->back()->with('success', 'Message sent successfully.');
    }

}
