<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlayerPotion extends Model
{
    protected $fillable = [
        'player_id',
        'potion_id',
        'quantity'
    ];

    protected $casts = [
        'quantity' => 'integer'
    ];

    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class);
    }

    public function potion(): BelongsTo
    {
        return $this->belongsTo(Potion::class);
    }
}
