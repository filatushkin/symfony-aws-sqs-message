<?php
// src/MessageHandler/SqsNotificationHandler.php
namespace App\MessageHandler;

use App\Message\SqsNotification;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class SqsNotificationHandler
{
    public function __invoke(SqsNotification $message)
    {

        $recived_time = date('Y-m-d H:i:s');
        $content = $message->getContent() . "\n". "recieved at: ".$recived_time."\n";
        echo $content;
        return true;
    }
}