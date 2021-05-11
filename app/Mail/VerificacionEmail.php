<?php

namespace App\Mail;
use App\User;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VerificacionEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $distressCall;

    public function __construct(User $distressCall)
    {
        $this->distressCall = $distressCall;
    }

    public function build()
    {
        return $this->view('Mail.verificacion_call')
        ->from('noreplysitpre@gmail.com')
        ->subject('Usuario Activado');
    }
}
