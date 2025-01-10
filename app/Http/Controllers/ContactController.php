<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageName = '';
        $data = ContactMessage::orderBy('id', 'desc')->paginate(10);

        return view('contact.index', compact('pageName', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha', // reCAPTCHA validation
        ]);

        ContactMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        // Send an email
        Mail::to('farid.alam@akdsl.com')->send(new ContactFormMail($request->all()));
        // Mail::send('vendor.mail.html.default', $data, function($message) use($data) {
        //     $message->to('bhattiasad12@gmail.com', 'Asad Bhatti');
        //     $message->subject('New email!!!');
        // });

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactMessage $contact)
    {
        $contact->delete();

        return redirect()->route('contact.index')->with('success', 'Message and file deleted successfully!');
    }
}
