<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\This;

class ContactsController extends Controller
{

    public function contactDetails(Contact $contact){
        return view('contacts.details', ['contact'=>$contact]);
    }

    public function contactDelete(Contact $contact){
        $contact->delete();
        return redirect()->back();
    }

    public function contactInsert(Request $request){
        $contact = new Contact();
        $contact->user_id = Auth::user()->id;
        $contact->name = $request->contact_name;
        $contact->save();
        return redirect()->back();
    }

    public function contactsShow(){
        $contacts = Contact::orderBy('id', 'desc')->get();
        return view('contacts.show', ['contacts'=>$contacts]);
    }
}
