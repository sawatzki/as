<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactsController extends Controller
{

    public function contactDetails(Contact $contact)
    {
        return view('contacts.details', ['contact' => $contact]);
    }

    public function contactEdit(Contact $contact)
    {
        return view('contact.edit');
    }

    public function contactDelete(Contact $contact)
    {
        $contact->delete();
        return redirect()->back();
    }

//    protected function showUpdate000(Project $project)
//    {
//        return view('projects.update', ['project' => $project]);
//    }

    protected function updateShowForm(Contact $contact)
    {
        return view('contacts.update', ['contact' => $contact]);
    }


    protected function showUpdate(Contact $contact)
    {
        return view('contacts.update', ['contact' => $contact]);
    }

    protected function contactUpdate(Request $request, Contact $contact)
    {
        $request = new Request([
            'contact_name' => $request->name,
            'user_id' => $contact->user_id,
        ]);

        $validated = $this->validate($request, [
            'contact_name' => 'required|string',
            'user_id' => 'required'
        ]);

        $contact->updateContact($validated);
        return redirect()->back();
    }

    public function contactInsert(Request $request)
    {
        $request = new Request([
            'contact_name' => $request->contact_name,
            'user_id' => Auth::user()->id,
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
        return view('contacts.show', ['contacts' => $contacts]);
    }
}
