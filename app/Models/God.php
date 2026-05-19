<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class God extends Model
{
    protected $fillable = [
        'name',
        'domain',
        'rarity',
        'base_hp',
        'base_atk',
        'base_def',
        'base_regen',
        'idle_resource',
        'idle_rate',
        'lore'
    ];

    protected $casts = [
        'base_hp' => 'integer',
        'base_atk' => 'integer',
        'base_def' => 'integer',
        'base_regen' => 'integer',
        'idle_rate' => 'integer'
    ];

    public function playerGods(): HasMany
    {
        return $this->hasMany(PlayerGod::class);
    }

    public function isDleProducer(): bool
    {
        return $this->is_idle !== null;
    }
}
