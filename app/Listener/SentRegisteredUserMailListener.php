<?php

namespace App\Listener;

use App\Events\RegisteredUserMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SentRegisteredUserMailListener
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
     * @param  RegisteredUserMail  $event
     * @return void
     */
    public function handle(RegisteredUserMail $event)
    {
        $data = array('name' => $event->user->name,'email'=> $event->user->email,
            'body'=> 'Thanks for registering in bookmyshow');
        Mail::send('emails.mail',$data,function ($message) use ($data){
            $message->to($data['email'])
                ->subject('welcome to Bookmyshow');
            $message->from('admin@bookmyshow.com');
        });
    }
}
