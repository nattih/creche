<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable

{
    use Notifiable;

    protected $guard = 'admin';

    protected $fillable = [
    'nom','prenom','sexe','telephone', 'email','cnib','naissance','lieu_nais',
    'residence','poste','debut_fonction','contrat','photo', 'password' , 'role'
];

    protected $hidden = [
    'password', 'remember_token',
    ];
}