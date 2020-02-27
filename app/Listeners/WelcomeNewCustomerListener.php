<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeNewUser;

class WelcomeNewCustomerListener
{
   
    public function handle($event)
    {
        Mail::to($event->customer->email)->send(new WelcomeNewUser());
    }
}
