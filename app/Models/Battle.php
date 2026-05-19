<?php

namespace App\Models;

use App\Models\PlayerExpedition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Battle extends Model
{
    protected $fillable = [
        'player_expedition_id',
        'round_number',
        'log_json',
    ];

    protected $casts = [
        'log_json' => 'array',
    ];

    public function playerExpedition(): BelongsTo
    {
        return $this->belongsTo(PlayerExpedition::class);
    }
}
