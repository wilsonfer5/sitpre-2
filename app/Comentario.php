<?php


namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Comentario extends Authenticatable
{
    use Notifiable;



    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'profe', 'emailpro', 'mate','item','nota','username','usermail','userurl','coment',
    ];

   
}