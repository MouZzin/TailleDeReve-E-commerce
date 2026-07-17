<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LignePanier extends Model
{
    protected $table = 'ligne_paniers';

    protected $fillable = [
        'panier_id',
        'produit_id',
        'quantite',
    ];

    protected $casts = [
        'quantite' => 'integer',
    ];

    public function panier()
    {
        return $this->belongsTo(Panier::class, 'panier_id');
    }

    public function produit()
    {
        return $this->belongsTo(Produit::class, 'produit_id');
    }
}
