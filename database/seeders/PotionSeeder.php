<?php

namespace Database\Seeders;

use App\Models\Potion;
use App\Models\Resource;
use Illuminate\Database\Seeder;

class PotionSeeder extends Seeder
{
    public function run(): void
    {
        $potions = [

            // ── SOIN ─────────────────────────────────────────────────────────

            [
                'name'            => 'Élixir de vitalité',
                'effect_type'     => 'heal',
                'effect_value'    => 20,
                'effect_duration' => null,
                'description'     => 'Restaure immédiatement 20 HP à un dieu blessé.',
                'recipe'          => [
                    ['slug' => 'herb',         'quantity' => 2],
                    ['slug' => 'grain',        'quantity' => 1],
                ],
            ],
            [
                'name'            => 'Potion de régénération',
                'effect_type'     => 'regen_boost',
                'effect_value'    => 3,
                'effect_duration' => 3,
                'description'     => 'Augmente la régénération d\'un dieu de 3 points pendant 3 tours.',
                'recipe'          => [
                    ['slug' => 'herb',         'quantity' => 3],
                    ['slug' => 'solar_essence','quantity' => 1],
                ],
            ],
            [
                'name'            => 'Baume de résurrection',
                'effect_type'     => 'revive',
                'effect_value'    => 30,
                'effect_duration' => null,
                'description'     => 'Ranime un dieu vaincu avec 30% de ses HP maximaux.',
                'recipe'          => [
                    ['slug' => 'soul_fragment', 'quantity' => 2],
                    ['slug' => 'solar_essence', 'quantity' => 2],
                    ['slug' => 'herb',          'quantity' => 1],
                ],
            ],

            // ── ATTAQUE ──────────────────────────────────────────────────────

            [
                'name'            => 'Philtre de fureur',
                'effect_type'     => 'atk_boost',
                'effect_value'    => 20,
                'effect_duration' => 2,
                'description'     => 'Augmente l\'ATK d\'un dieu de 20% pendant 2 tours.',
                'recipe'          => [
                    ['slug' => 'blood_crystal',   'quantity' => 2],
                    ['slug' => 'lightning_shard', 'quantity' => 1],
                ],
            ],
            [
                'name'            => 'Essence de foudre',
                'effect_type'     => 'atk_boost',
                'effect_value'    => 35,
                'effect_duration' => 1,
                'description'     => 'Confère un bonus d\'ATK massif de 35% pendant 1 tour.',
                'recipe'          => [
                    ['slug' => 'lightning_shard', 'quantity' => 3],
                    ['slug' => 'iron_ore',        'quantity' => 1],
                ],
            ],
            [
                'name'            => 'Sang de Kali',
                'effect_type'     => 'crit_boost',
                'effect_value'    => 25,
                'effect_duration' => 2,
                'description'     => 'Augmente le taux de critique de 25% pendant 2 tours.',
                'recipe'          => [
                    ['slug' => 'blood_crystal',  'quantity' => 3],
                    ['slug' => 'shadow_essence', 'quantity' => 1],
                ],
            ],

            // ── DÉFENSE ──────────────────────────────────────────────────────

            [
                'name'            => 'Huile de forge',
                'effect_type'     => 'def_boost',
                'effect_value'    => 15,
                'effect_duration' => 3,
                'description'     => 'Enrobe un dieu d\'un métal divin, augmentant sa DEF de 15% pendant 3 tours.',
                'recipe'          => [
                    ['slug' => 'iron_ore', 'quantity' => 3],
                    ['slug' => 'ash_dust', 'quantity' => 1],
                ],
            ],
            [
                'name'            => 'Bouclier d\'Athéna',
                'effect_type'     => 'shield',
                'effect_value'    => 15,
                'effect_duration' => null,
                'description'     => 'Applique un bouclier absorbant 15 dégâts au prochain coup reçu.',
                'recipe'          => [
                    ['slug' => 'knowledge_scroll', 'quantity' => 1],
                    ['slug' => 'iron_ore',         'quantity' => 2],
                    ['slug' => 'solar_essence',    'quantity' => 1],
                ],
            ],

            // ── UTILITAIRE ───────────────────────────────────────────────────

            [
                'name'            => 'Voile d\'ombre',
                'effect_type'     => 'dodge_boost',
                'effect_value'    => 20,
                'effect_duration' => 2,
                'description'     => 'Enveloppe un dieu d\'ombre, augmentant son esquive de 20% pendant 2 tours.',
                'recipe'          => [
                    ['slug' => 'shadow_essence', 'quantity' => 2],
                    ['slug' => 'feather',        'quantity' => 1],
                ],
            ],
            [
                'name'            => 'Encens de sagesse',
                'effect_type'     => 'idle_boost',
                'effect_value'    => 50,
                'effect_duration' => null,
                'description'     => 'Double temporairement la production idle d\'un dieu assigné à une base (+50%).',
                'recipe'          => [
                    ['slug' => 'knowledge_scroll', 'quantity' => 2],
                    ['slug' => 'grain',            'quantity' => 2],
                    ['slug' => 'seed',             'quantity' => 1],
                ],
            ],
            [
                'name'            => 'Larme de Njörðr',
                'effect_type'     => 'resource_boost',
                'effect_value'    => 10,
                'effect_duration' => null,
                'description'     => 'Génère instantanément 10 unités de la ressource idle du dieu ciblé.',
                'recipe'          => [
                    ['slug' => 'fish',         'quantity' => 3],
                    ['slug' => 'soul_fragment','quantity' => 1],
                ],
            ],
        ];

        foreach ($potions as $data) {
            $recipe = $data['recipe'];
            unset($data['recipe']);

            $potion = Potion::create($data);

            foreach ($recipe as $ingredient) {
                $resource = Resource::where('slug', $ingredient['slug'])->firstOrFail();
                $potion->potionRecipes()->create([
                    'resource_id' => $resource->id,
                    'quantity'    => $ingredient['quantity'],
                ]);
            }
        }
    }
}