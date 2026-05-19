<?php

use App\Models\Player;
use App\Models\PlayerGod;
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
        Schema::create('base_slots', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Player::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(PlayerGod::class)->nullable()->constrained()->cascadeOnDelete();
            $table->string('slot_type');
            $table->datetime('started_at')->nullable();
            $table->datetime('last_collected_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('base_slots');
    }
};
