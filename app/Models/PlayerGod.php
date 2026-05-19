<?php

namespace App\Models;

use App\Models\God;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PlayerGod extends Model
{
    protected $fillable = [
        'player_id',
        'god_id',
        'tier',
        'level',
        'xp',
        'hp_current',
        'position',
        'is_at_base',
        'acquired_at'
    ];

    protected $casts = [
        'tier' => 'integer',
        'level' => 'integer',
        'xp' => 'integer',
        'hp_current' => 'integer',
        'is_at_base' => 'boolean',
        'acquired_at' => 'datetime'
    ];

    public function god(): BelongsTo
    {
        return $this->belongsTo(God::class);
    }

    public function player(): BelongsTo
    {
        return $this->belongsTo(Player::class);
    }

    public function baseSlot(): HasMany
    {
        return $this->hasMany(BaseSlot::class);
    }
}
