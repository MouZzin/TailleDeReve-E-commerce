<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Temoignage extends Model
{
    protected $table = 'temoignages';

    protected $fillable = [
        'client_id',
        'client_name',
        'note',
        'commentaire',
        'approuve',
    ];

    protected $casts = [
        'note' => 'integer',
        'approuve' => 'boolean',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
