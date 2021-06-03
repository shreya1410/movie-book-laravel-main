<?php

namespace App\Listener;

use App\Events\BookTicketMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SentBookedTicketMailListener
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
     * @param  BookTicketMail  $event
     * @return void
     */
    public function handle(BookTicketMail $event)
    {

    }
}
