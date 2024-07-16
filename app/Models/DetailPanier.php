<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailPanier extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'panier_id',
        'produit_id',
        'qte-com'
    ];

    public function panier(): BelongsTo
    {
        return $this->belongsTo(Panier::class);
    }

    public function produit() :BelongsTo
    {
        return $this->belongsTo(Produit::class);
    }
}