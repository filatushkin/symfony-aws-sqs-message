<?php
// src/Message/SymfonyNotification.php
namespace App\Message;

class SymfonyNotification
{
    private $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}