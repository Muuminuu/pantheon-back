<?php

namespace App\Models;

use App\Models\Potion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PotionRecipe extends Model
{
    protected $fillable = [
        'potion_id',
        'resource_id',
        'quantity'
    ];

    public function potion(): BelongsTo
    {
        return $this->belongsTo(Potion::class);
    }

    public function resource(): BelongsTo
    {
        return $this->belongsTo(Resource::class);
    }
}
