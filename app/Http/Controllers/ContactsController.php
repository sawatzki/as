<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Events\ContactsEvent;
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
    protected function showUpdate000(Project $project)
    {
        return view('projects.update', ['project' => $project]);
    }

    protected function updateShowForm(Contact $contact){
        return view('contacts.update', ['contact' => $contact]);
    }
    protected function showUpdate(Contact $contact)
    {
        echo "UPD FORM";
        #die();
        return view('contacts.update', ['contact' => $contact]);
    }

    protected function contactUpdate(Request $request, Contact $contact)
    {
        echo "UPDATED controller";
;
        $validatedData = $request->validate([
            'contact_name' => 'required|string',
        ]);
        $contact->updateContact($validatedData);

        #return redirect('/contacts');
    }

    public function contactUpdate1(Request $request){
        die();
        $request = new Request([
            'contact_name' => $request->contact_name,
            'user_id' => Auth::user()->id
        ]);

        $validated = $this->validate($request, [
            'contact_name' => 'required|string',
            'user_id' => 'required'
        ]);

        $contact = new Contact();
        $contact->updateContact($validated);

        #return redirect()->back();
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

        event(new ContactsEvent($contact));
        return redirect()->back();
    }

    public function contactsShow()
    {
        $contacts = Contact::orderBy('id', 'desc')->get();
        return view('contacts.show', ['contacts'=>$contacts]);
    }
}
