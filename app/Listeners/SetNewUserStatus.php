<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SetNewUserStatus
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        // Establecer el estado del usuario como "Nuevo"
        $event->user->estado = 'Nuevo';
        $event->user->save();
    }
}
