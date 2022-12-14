<?php

namespace biblioteca\app\utils;

use biblioteca\core\App;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;

class MyMail
{
    private $mailer;

    public function __construct()
    {
        $config = App::get('config')['email'];
        $transport = (new Swift_SmtpTransport($config['smtp_server'], $config['smtp_port'], $config['smtp_security']))
            ->setUsername($config['username'])
            ->setPassword($config['password']);
        $this->mailer = new Swift_Mailer($transport);
    }

    public function send($asunto, $MailTo, $NameTo, $mensaje): void
    {
        $config = App::get('config')['email'];
        $message = (new Swift_Message($asunto))
            ->setFrom([$config['username'] => $config['name']])
            ->setTo([$MailTo => $NameTo])
            ->setBody($mensaje);

        $this->mailer->send($message);
    }
}