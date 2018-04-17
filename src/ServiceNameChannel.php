<?php

namespace NotificationChannels\Iletimerkezi;

use NotificationChannels\Iletimerkezi\Exceptions\CouldNotSendNotification;
use NotificationChannels\Iletimerkezi\Events\MessageWasSent;
use NotificationChannels\Iletimerkezi\Events\SendingMessage;
use Illuminate\Notifications\Notification;

class IletimerkeziChannel
{
    public function __construct()
    {
        // Initialisation code here
    }

    /**
     * Send the given notification.
     *
     * @param mixed $notifiable
     * @param \Illuminate\Notifications\Notification $notification
     *
     * @throws \NotificationChannels\Iletimerkezi\Exceptions\CouldNotSendNotification
     */
    public function send($notifiable, Notification $notification)
    {
        //$response = [a call to the api of your notification send]

//        if ($response->error) { // replace this by the code need to check for errors
//            throw CouldNotSendNotification::serviceRespondedWithAnError($response);
//        }
    }
}
