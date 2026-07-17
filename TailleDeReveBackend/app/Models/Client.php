<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Client extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $table = 'clients';

    protected $fillable = [
        'nom',
        'email',
        'google_id',
        'avatar',
        'telephone',
    ];

    protected $hidden = [
        'remember_token',
    ];

    public function commandes()
    {
        return $this->hasMany(Commande::class, 'client_id');
    }

    public function temoignages()
    {
        return $this->hasMany(Temoignage::class, 'client_id');
    }

    public function panier()
    {
        return $this->hasOne(Panier::class, 'client_id');
    }
}
