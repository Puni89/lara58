<?php

namespace App\Listeners;

use App\Events\NewCustomerHasRegisteredEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisterCustomersToNewsletter
{
 
     public function handle(NewCustomerHasRegisteredEvent $event)
    {
          //Register to NewsLetter
          dump('News letter');
        
    }
}
