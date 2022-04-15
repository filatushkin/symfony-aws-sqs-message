<?php
// src/Controller/NotifyController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use App\Message\SymfonyNotification;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Messenger\MessageBusInterface;

class NotifyController extends AbstractController
{
    public function index(MessageBusInterface $bus)
    {
        $message = 'Message from symfony: '.date('Y-m-d H:i:s');
        
        // send message to Event Bus
        $bus->dispatch(new SymfonyNotification($message));

        return new Response(
            'sent a message <br/>'.$message
        );
    }
}