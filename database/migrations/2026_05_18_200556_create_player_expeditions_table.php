<?php

use App\Models\Expedition;
use App\Models\Player;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('player_expeditions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Player::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Expedition::class)->constrained()->cascadeOnDelete();
            $table->enum('status', ['in_progress', 'victory', 'defeat', 'abandoned']);
            $table->json('squad_snapshot');
            $table->datetime('started_at')->useCurrent();
            $table->datetime('ended_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_expeditions');
    }
};
