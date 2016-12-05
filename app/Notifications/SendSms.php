<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\NexmoMessage;
use App\Mensagem;

class SendSms extends Notification implements ShouldQueue
{
    use Queueable;

    protected $mensagem;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Mensagem $mensagem)
    {
        //
        $this->mensagem = $mensagem;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['nexmo'];
    }

    public function toNexmo($notifiable)
    {
        return (new NexmoMessage)
            ->content($this->mensagem->conteudo)
            ->from('MUKHERO ICT');
    }
}
