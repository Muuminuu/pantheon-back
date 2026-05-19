<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PlayerResource extends Model
{
    protected $fillable = [
        'player_id',
        'resource_id',
        'quantity',
    ];

    protected $casts = [
        'quantity' => 'integer',
    ];

    public function resource(): BelongsTo
    {
        return $this->belongsTo(Resource::class);
    }

    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class);
    }
}
