<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact as ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact as ContactModel;

class ContactController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Store the message in the database
        ContactModel::create($request->all());

        // Send an email with the contents of the message
        Mail::send(new ContactMail($request));

        return back()->with('success', 'Thanks for contacting us!');
    }
}
