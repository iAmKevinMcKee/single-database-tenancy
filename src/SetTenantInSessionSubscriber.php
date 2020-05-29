<?php

namespace IAmKevinMcKee\SingleDatabaseTenancy;

use Illuminate\Auth\Events\Login;

class SetTenantInSessionSubscriber
{
    /**
     * Register the listeners for the subscriber.
     *
     * @param  \Illuminate\Events\Dispatcher  $events
     */
    public function subscribe($events)
    {
        $events->listen(
            Login::class,
            SetTenantInSession::class
        );
    }
}
