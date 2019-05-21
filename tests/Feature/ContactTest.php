<?php

namespace Tests\Feature;

use App\Contact;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ContactTest extends TestCase
{
    #use DatabaseMigrations;
    use DatabaseTransactions;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testContactInsert()
    {
        $contact = new Contact();
        $contact->insertContact(['name'=>'test1', 'user_id'=>1]);
        $this->assertNotNull($contact);
    }

    public function testContactDelete()
    {
        $contact = new Contact(['name'=>'test0', 'user_id'=>2]);
        $this->assertNotNull($contact->save());

        $contact = Contact::where('id', '=', $contact->id)->first();
        $this->assertNotNull($contact->delete());

    }

}
