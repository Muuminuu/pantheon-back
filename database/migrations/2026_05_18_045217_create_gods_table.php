<?php

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
        Schema::create('gods', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('domain');
            $table->enum('rarity', ['common', 'rare', 'legendary']);
            $table->integer('base_hp')->default(20);
            $table->integer('base_atk')->default(5);
            $table->integer('base_def')->default(5);
            $table->integer('base_regen')->default(1);
            $table->string('idle_resource');
            $table->integer('idle_rate')->default(1);
            $table->string('lore');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gods');
    }
};
