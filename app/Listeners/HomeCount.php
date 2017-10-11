<?php

namespace App\Listeners;

use App\Models\Redis\Home;

class HomeCount
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

    public function subscribe($events)
    {
        $events->listen(
            'App\Events\HomeView',
            'App\Listeners\HomeCount@addView'
        );
    }

    public function addView($event)
    {
        $data = $event->data;
        (new Home())->add();
    }
}
