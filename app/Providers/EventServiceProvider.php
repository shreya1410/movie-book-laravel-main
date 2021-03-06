<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;


use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\RegisteredUserMail;
use App\Events\LoginHistory;
use App\Events\BookTicketMail;
use App\Listener\SentRegisteredUserMailListener;
use App\Listener\storeUserLoginHistory;
use App\Listener\SentBookedTicketMailListener;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        RegisteredUserMail::class =>[
            SentRegisteredUserMailListener::class,
        ],
        LoginHistory::class=>[
            storeUserLoginHistory::class,
        ],
        BookTicketMail::class=>[
            SentBookedTicketMailListener::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
