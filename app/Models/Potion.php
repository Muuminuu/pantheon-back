<?php

namespace App\Models;

use App\Models\PlayerPotion;
use App\Models\PotionRecipe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Potion extends Model
{
    protected $fillable = [
        'name',
        'effect_type',
        'effect_value',
        'effect_duration',
        'description'
    ];

    protected $casts = [
        'effect_value' => 'integer',
        'effect_duration' => 'integer',
    ];

    public function potionRecipes(): HasMany
    {
        return $this->hasMany(PotionRecipe::class);
    }

    public function playerPotions(): HasMany
    {
        return $this->hasMany(PlayerPotion::class);
    }

    public function resources(): HasManyThrough
    {
        return $this->hasManyThrough(
            Resource::class, 
            PotionRecipe::class,
            'potion_id', 
            'id', 
            'id', 
            'resource_id'
            );
    }
}
