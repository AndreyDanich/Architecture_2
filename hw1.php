<?php

interface NotificationInterface 
{
    public function send($message);
}

class Notification implements NotificationInterface
{
    public function send($message)
    {

    }
}

class SmsNotification implements NotificationInterface
{
    protected $notify;

    public function __construct($notify)
    {
        $this->notify = $notify;
    }

    public function send($message)
    {
        $this->sms($message);
        return $this->notify->send($message);
    }
    public function sms($message){
        return ($message);
    }
}

class EmailNotification implements NotificationInterface
{
    protected $notify;

    public function __construct($notify)
    {
        $this->notify = $notify;
    }

    public function send($message)
    {
        $this->email($message);
        return $this->notify->send($message);
    }

    public function email($message){
        return ($message);
    }
}

class ChromeNotification implements NotificationInterface
{
    protected $notify;

    public function __construct($notify)
    {
        $this->notify = $notify;
    }

    public function send($message)
    {
        $this->chromeNotify($message);
        return $this->notify->send($message);
    }
    public function chromeNotify($message){
        return ($message);
    }
}

$notify = new ChromeNotification(
    new EmailNotification(
        new SmsNotification(
            new Notification()
        )
    )
);




// interface NotificationInterface 
// {
//     public function send(string $message);
// }

// class Notification implements NotificationInterface
// {
//     protected $notify;

//     public function send($message)
//     {

//     }
// }

// class SmsNotification implements NotificationInterface
// {
//     public function send(string $message)
//     {
//         return smsNotify($message);
//     }
// }

// class EmailNotification implements NotificationInterface
// {
//     public function send(string $message)
//     {
//         return emailNotify($message);
//     }
// }

// class ChromeNotification implements NotificationInterface
// {
//     public function send(string $message)
//     {
//         return chromeNotify($message);
//     }
// }

// $notify = new ChromeNotification(
//     new EmailNotification(
//         new SmsNotification(
//             new Notification()
//         )
//     )
// );