<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index(){
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }

    public function show(Contact $contact){
        return view('admin.contact.show', compact('contact'));
    }
}
