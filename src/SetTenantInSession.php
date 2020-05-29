<?php

namespace IAmKevinMcKee\SingleDatabaseTenancy;

class SetTenantInSession
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        if(array_key_exists('tenant_id', $event->user->getAttributes())) {
            session()->put('tenant_id', $event->user->tenant_id);
        }
    }
}
