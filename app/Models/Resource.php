<?php

namespace App\Models;

use App\Models\PlayerResource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Resource extends Model
{
    protected $fillable = [
        'slug',
        'name',
        'category',
        'description'
    ];

    public function playerResources(): HasMany
    {
        return $this->hasMany(PlayerResource::class);
    }

    public function potionRecipes(): HasMany
    {
        return $this->hasMany(PotionRecipe::class);
    }
}
