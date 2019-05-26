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
        'email',
        'password',
        'sexo',
        'cpf', 
        'data_nascimento',
        'foto',
        'residente1',
        'idade_residente1',
        'sexo_residente1',
        'residente2',
        'idade_residente2',
        'sexo_residente2',
        'residente3',
        'idade_residente3',
        'sexo_residente3',
        'residente4',
        'idade_residente4',
        'sexo_residente4',
        'residente5',
        'idade_residente5',
        'sexo_residente5',
        'residente6',
        'idade_residente6',
        'sexo_residente6',
        'residente7',
        'idade_residente7',
        'sexo_residente7',
        'residente8',
        'idade_residente8',
        'sexo_residente8',
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
