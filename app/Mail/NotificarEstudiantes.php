<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotificarEstudiantes extends Mailable
{
    use Queueable, SerializesModels;

    public $notificacion;

    public function __construct($comentario)
    {
        
       $this->notificacion = $comentario;

    }

    public function build()
    {
        return $this->view('Mail.notify_students')->from('noreplysitpre@gmail.com')->subject('Notificación carga de notas');

    }
}
