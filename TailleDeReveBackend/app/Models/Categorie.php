<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'nom',
        'slug',
        'description',
        'image',
    ];

    public function produits()
    {
        return $this->hasMany(Produit::class, 'categorie_id');
    }
}
