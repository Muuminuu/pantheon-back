<?php

use App\Models\Potion;
use App\Models\Resource;
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
        Schema::create('potion_recipes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Potion::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Resource::class)->constrained()->cascadeOnDelete();
            $table->integer('quantity')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('potion_recipes');
    }
};
