<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use NotificationChannels\WebPush\WebPushMessage;
use NotificationChannels\WebPush\WebPushChannel;
use Illuminate\Notifications\Messages\MailMessage;

class MessageReceived extends Notification
{
    use Queueable;
    public $message;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(\App\Message $message)
    {
        //
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail',WebPushChannel::class];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('New Message Received!')
                    ->line("You have a new message from {$this->message->sender->name}.")
                    ->line("Message: {$this->message->message}")
                    ->action('Reply Now', url("/message/{$this->message->id}"))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
    public function toWebPush($notifiable, $notification)
    {
        return WebPushMessage::create()
             ->id($this->message->id)
            ->title('New Message Received!')
            //->icon('/approved-icon.png')
            ->body("Message: {$this->message->message}"
            ->action('View Message', 'view_message');
    }
}
