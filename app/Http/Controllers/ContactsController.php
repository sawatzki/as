<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactsController extends Controller
{

    public function contactDetails(Contact $contact)
    {
        return view('contacts.details', ['contact'=>$contact]);
    }

    public function contactDelete(Contact $contact)
    {
        $contact->delete();
        return redirect()->back();
    }

    public function contactInsert(Request $request)
    {
        $request = new Request([
            'contact_name' => $request->contact_name,
            'user_id' => Auth::user()->id
        ]);

        $validated = $this->validate($request, [
            'contact_name' => 'required|string',
            'user_id' => 'required'
        ]);

        $contact = new Contact();
        $contact->insertContact($validated);

        return redirect()->back();
    }

    public function contactsShow()
    {
        $contacts = Contact::orderBy('id', 'desc')->get();
        return view('contacts.show', ['contacts'=>$contacts]);
    }
}
