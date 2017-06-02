<?php

namespace App\Ch8;

use App\Ch8\Notice\Notifier;

class RegistrationMgr
{
    public function register(Lesson $lesson)
    {
        // do something with this lesson

        //notify an administrator
        $notifier = Notifier::getNotifier();
        $notifier->inform("new lesson: cost ({$lesson->cost()})");
    }

}