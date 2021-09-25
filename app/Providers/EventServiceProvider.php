<?php

namespace App\Providers;

use App\Events\IncentiveCompleteEvent;
use App\Listeners\BirthRecordedListener;
use App\Listeners\CincoDeLoggoListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

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
        IncentiveCompleteEvent::class => [
            BirthRecordedListener::class,
            CincoDeLoggoListener::class,
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
