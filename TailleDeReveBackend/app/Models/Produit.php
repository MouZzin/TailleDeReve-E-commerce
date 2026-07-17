<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table = 'produits';

    protected $fillable = [
        'categorie_id',
        'nom',
        'slug',
        'description',
        'prix',
        'stock',
        'image',
        'actif',
    ];

    protected $casts = [
        'prix' => 'decimal:2',
        'stock' => 'integer',
        'actif' => 'boolean',
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'categorie_id');
    }

    public function ligneCommandes()
    {
        return $this->hasMany(LigneCommande::class, 'produit_id');
    }
}
