<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\videoviewer;

class Increase
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
    public function handle(videoviewer $event)
    {
        $this->updateview($event->video1);
    }
    public function updateview($vid)
    {

        $vid->viewers += 1;
        $vid->save();
    }
}
