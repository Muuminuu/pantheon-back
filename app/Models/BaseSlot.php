<?php

namespace App\Models;

use App\Models\Player;
use App\Models\PlayerGod;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BaseSlot extends Model
{
    protected $fillable = [
        'player_id',
        'slot_type',
        'player_god_id',
        'started_at',
        'last_collected_at'
    ];

    protected $casts = [
        'started_at' => 'datetime',
        'last_collected_at' => 'datetime'
    ];

    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class);
    }

    public function playerGod(): BelongsTo 
    {
        return $this->belongsTo(PlayerGod::class);
    }
}
