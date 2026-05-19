<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class God extends Model
{
    protected $fillable = [
        'name',
        'domain',
        'archetype',
        'stat_growth',
        'passive_skill',
        'active_skill',
        'base_hp',
        'base_atk',
        'base_def',
        'base_regen',
        'idle_resource',
        'idle_rate',
        'lore'
    ];

    protected $casts = [
        'stat_growth' => 'json',
        'passive_skill' => 'json',
        'active_skill' => 'json',
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

    public function isIdleProducer(): bool
    {
        return $this->idle_resource !== null;
    }
}
