<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class SkillsUpdated extends Notification
{
    use Queueable;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
      switch ($notifiable->type) {
        case 'student':
        return (new MailMessage)
                ->subject('Your Skillset Has Been Updated!')
                ->greeting($notifiable->name)
                ->line('Your skill set has been updated!')
                ->action('View Skillset', url('/cheerleader/skills'))
                ->line('Thank you for using our application!');
        break;
        case 'coach':
        return (new MailMessage)
                ->subject('Your Skillset Watchlist Has Been Updated!')
                ->greeting($notifiable->name)
                ->line('Your skill set watchlist has been updated!')
                ->action('View Skillset Watchlist', url('/coach/skills'))
                ->line('Thank you for using our application!');
        break;
      }
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
}
