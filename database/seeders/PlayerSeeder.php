<?php

namespace Database\Seeders;

use App\Models\God;
use App\Models\Player;
use App\Models\Resource;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    public function run(): void
    {
        // ── Joueur vide (état new game) ──────────────────────────────────────
        Player::factory()->create([
            'name' => 'nouveau_joueur',
        ]);

        // ── Joueur avec progression (pour tester les écrans non-vides) ───────
        $player = Player::factory()->withProgress()->create([
            'name' => 'joueur_test',
        ]);

        // 3 dieux assignés : un de chaque archétype clé
        $gods = God::whereIn('name', ['Thor', 'Athéna', 'Zeus'])->get();

        foreach ($gods as $index => $god) {
            $player->playerGods()->create([
                'god_id'      => $god->id,
                'tier'        => 1,
                'level'       => fake()->numberBetween(1, 5),
                'xp'          => fake()->numberBetween(0, 100),
                'hp_current'  => $god->base_hp,
                'position'    => ['front', 'mid', 'back'][$index],
                'is_at_base'  => false,
                'acquired_at' => now()->subDays(fake()->numberBetween(1, 30)),
            ]);
        }

        // Quelques ressources de départ
        $resourceSlugs = ['herb', 'grain', 'iron_ore', 'gold_coin', 'lightning_shard'];
        $resources = Resource::whereIn('slug', $resourceSlugs)->get();

        foreach ($resources as $resource) {
            $player->playerResources()->create([
                'resource_id' => $resource->id,
                'quantity'    => fake()->numberBetween(5, 50),
            ]);
        }
    }
}