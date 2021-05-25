<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EnviarComentario extends Mailable
{
    use Queueable, SerializesModels;

    public $commentary;

    public function __construct(Requests $request)
    {
        $this->commentary = $request;
    }

    public function build()
    {
        return $this->view('Mail.register_commentary')
        ->from('noreplysitpre@gmail.com')
        ->subject('Nuevo Comentario');
    }
}
