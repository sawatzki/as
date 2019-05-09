<?php

namespace Tests\Feature;

use App\Contact;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ContactTest extends TestCase
{

    #use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /*public function testExample()
    {
        $contact = new Contact();
        $this->assertEquals(1, 1);
    }
    public function testExample2()
    {
        $this->assertEquals(1, 2);
    }*/
    public function testContactDetails(){
        $this->visit('/test')
            ->see('test1');
    }
}
