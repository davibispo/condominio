<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'bloco',
        'apto',
        'email',
        'password',
        'sexo',
        'cpf', 
        'tel1', 
        'tel2', 
        'data_nascimento',
        'foto',
        'residente1',
        'idade_residente1',
        'residente2',
        'idade_residente2',
        'residente3',
        'idade_residente3',
        'residente4',
        'idade_residente4',
        'residente5',
        'idade_residente5',
        
        'ativo',
        'tipo',
        'status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
