<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Event' => [
            'App\Listeners\EventListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
     Use PDO;
    public function boot()
    {
        parent::boot();
        Event::listen('Illuminate\Database\Events\StatementPrepared', function ($event) {
            $event->statement->setFetchMode(PDO::FETCH_ASSOC);
        });

        //
    }
}
