<?php

namespace App\Listeners;

use App\Events\NewCandidacy;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailCandidacyConfirmation implements ShouldQueue
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
     * @param  \App\Events\NewCandidacy  $event
     * @return void
     */
    public function handle(NewCandidacy $event)
    {
        $candidate = $event->candidate;
        Mail::to($candidate->email)
            ->send(new \App\Mail\NewCandidacy($candidate));
    }
}
