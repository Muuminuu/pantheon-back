<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Player extends Model
{
    protected $fillable = [
        'name',
        'level',
        'xp',
        'gold',
        'last_login_at'
    ];

    protected $casts = [
        'last_login_at' => 'datetime'
    ];

    public function playerGods(): HasMany
    {
        return $this->hasMany(PlayerGod::class);
    }

    public function gods(): HasManyThrough
    {
        return $this->hasManyThrough(God::class, PlayerGod::class);
    }

    public function playerResources(): HasMany
    {
        return $this->hasMany(PlayerResource::class);
    }

    public function playerPotions(): HasMany{
        return $this->hasMany(PlayerPotion::class);
    }

    public function potions(): HasManyThrough
    {
        return $this->hasManyThrough(Potion::class, PlayerPotion::class);
    }

    public function baseSlot(): HasMany
    {
        return $this->hasMany(BaseSlot::class);
    }
}
