<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailing extends Mailable
{
    use Queueable, SerializesModels;
    
    public $detalles;

    public function __construct($detalles)
    {
        $this->detalles = $detalles;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('no_reply@umbral.uno', 'Umbral')->subject($this->detalles['asunto'])->view($this->detalles['view']);
    }
}
