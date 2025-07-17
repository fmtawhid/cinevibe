<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    // Show list of all messages
    public function index()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('admin-contact', compact('contacts'));
    }

    // Store new contact submission
    public function store(Request $request)
    {
        Contact::create($request->only(['name', 'email', 'phone', 'subject', 'message']));
        return back()->with('success', 'Message sent successfully!');
    }

    // Show single message
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin-contact-show', compact('contact'));
    }

    // Delete message
    public function destroy($id)
    {
        Contact::destroy($id);
        return back()->with('success', 'Message deleted successfully!');
    }
}
