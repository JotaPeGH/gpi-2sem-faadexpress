<?php

namespace App\Listeners;

use App\Events\PedidosChangedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class PedidosChangedListener
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
     * @param  \App\Events\PedidosChangedEvent  $event
     * @return void
     */
    public function handle(PedidosChangedEvent $event)
    {
        //
    }
}
