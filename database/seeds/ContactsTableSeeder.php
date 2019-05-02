<?php

use App\Contact;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact = new Contact();
        $contact->name = 'Artem';
        $contact->user_id = 1;
        $contact->save();

        $contact = new Contact();
        $contact->name = 'Wladimir';
        $contact->user_id = 2;
        $contact->save();

        $contact = new Contact();
        $contact->name = 'Ivan';
        $contact->user_id = 3;
        $contact->save();
    }
}
