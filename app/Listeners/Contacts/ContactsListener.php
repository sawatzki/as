<?php

namespace App\Listeners\Contacts;

use App\Events\ContactsEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactsListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ContactsEvent  $event
     * @return void
     */
    public function handle(ContactsEvent $event)
    {
        echo "Event :" . $event->name;
        echo "<br>";
        echo "Event STOP :)";
        die();
    }
}
