<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $table = 'commandes';

    protected $fillable = [
        'client_id',
        'reference',
        'statut',
        'total',
        'adresse_livraison',
        'notes',
        'whatsapp_sent',
    ];

    protected $casts = [
        'total' => 'decimal:2',
        'whatsapp_sent' => 'boolean',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function ligneCommandes()
    {
        return $this->hasMany(LigneCommande::class, 'commande_id');
    }
}
