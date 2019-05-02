<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactsController extends Controller
{
    public function insertContacts(Request $request){

        $contact = new Contact();
        $contact->user_id = Auth::user()->id;
        $contact->name = $request->contact_name;

        $contact->save();

        return redirect()->back();
    }

    public function showContacts(){
        $contacts = Contact::orderBy('id', 'desc')->get();
        return view('contacts.show', ['contacts'=>$contacts]);
    }
}
