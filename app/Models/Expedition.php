<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Expedition extends Model
{
    protected $fillable = [
        'name',
        'difficulty',
        'recommended_level',
        'zone_id',
        'rewards_json',
        'description'
    ];

    protected $casts = [
        'rewards_json' => 'array'
    ];

    public function playerExpeditions(): HasMany
    {
        return $this->hasMany(PlayerExpedition::class);
    }
}
