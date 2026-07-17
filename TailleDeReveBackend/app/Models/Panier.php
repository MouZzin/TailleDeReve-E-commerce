<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    protected $table = 'paniers';

    protected $fillable = [
        'client_id',
        'session_id',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function lignePaniers()
    {
        return $this->hasMany(LignePanier::class, 'panier_id');
    }
}
