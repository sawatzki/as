<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{

    public function insertContacts(Request $request){

        dump($request);
        die();
        return redirect()->back();
    }

    public function showContacts(){
        $contacts = Contact::all();
        return view('contacts.show', ['contacts'=>$contacts]);
    }
}
