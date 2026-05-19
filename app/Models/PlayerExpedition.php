<?php

namespace App\Models;

use App\Models\Battle;
use App\Models\Expedition;
use App\Models\Player;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PlayerExpedition extends Model
{
    protected $fillable = [
        'player_id',
        'expedition_id',
        'status',
        'squad_snapshot',
        'started_at',
        'ended_at'
    ];

    protected $casts = [
        'squad_snapshot' => 'array',
        'started_at' => 'datetime',
        'ended_at' => 'datetime'
    ];

    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class);
    }

    public function expedition(): BelongsTo
    {
        return $this->belongsTo(Expedition::class);
    }

    public function battles(): HasMany
    {
        return $this->hasMany(Battle::class);
    }
}
