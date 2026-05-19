<?php

namespace Database\Seeders;

use App\Models\Resource;
use Illuminate\Database\Seeder;

class ResourceSeeder extends Seeder
{
    public function run(): void
    {
        $resources = [

            // ── PLANT ────────────────────────────────────────────────────────

            [
                'slug'        => 'herb',
                'name'        => 'Herbe sacrée',
                'category'    => 'plant',
                'description' => 'Une plante aux vertus apaisantes, cueillie à l\'aube dans les jardins des dieux.',
            ],
            [
                'slug'        => 'grain',
                'name'        => 'Grain béni',
                'category'    => 'plant',
                'description' => 'Blé poussé sous la bénédiction de Déméter, nourriture des héros en campagne.',
            ],
            [
                'slug'        => 'seed',
                'name'        => 'Graine du renouveau',
                'category'    => 'plant',
                'description' => 'Semence mystique liée aux cycles saisonniers, capable de germer même sur sol stérile.',
            ],
            [
                'slug'        => 'feather',
                'name'        => 'Plume du Serpent',
                'category'    => 'plant',
                'description' => 'Plume irisée tombée de Quetzalcóatl, légère comme le vent et douce comme la sagesse.',
            ],

            // ── MINERAL ──────────────────────────────────────────────────────

            [
                'slug'        => 'iron_ore',
                'name'        => 'Minerai de fer divin',
                'category'    => 'mineral',
                'description' => 'Extrait des forges volcaniques d\'Héphaïstos, ce minerai ne rouille jamais.',
            ],
            [
                'slug'        => 'gold_coin',
                'name'        => 'Pièce d\'or olympienne',
                'category'    => 'mineral',
                'description' => 'Monnaie frappée à l\'effigie d\'Hermès, valeur universelle entre mortels et immortels.',
            ],
            [
                'slug'        => 'blood_crystal',
                'name'        => 'Cristal de sang',
                'category'    => 'mineral',
                'description' => 'Pierre rouge sombre formée là où les guerriers tombent au combat, imprégnée de violence.',
            ],
            [
                'slug'        => 'lightning_shard',
                'name'        => 'Éclat de foudre',
                'category'    => 'mineral',
                'description' => 'Fragment d\'un éclair de Zeus ou de Mjöllnir, encore crépitant d\'énergie céleste.',
            ],
            [
                'slug'        => 'ash_dust',
                'name'        => 'Cendre sacrée',
                'category'    => 'mineral',
                'description' => 'Résidu de la danse destructrice de Shiva, contenant en elle le germe de la renaissance.',
            ],

            // ── ESSENCE ──────────────────────────────────────────────────────

            [
                'slug'        => 'shadow_essence',
                'name'        => 'Essence d\'ombre',
                'category'    => 'essence',
                'description' => 'Substance ténébreuse distillée par Loki et Tezcatlipoca, insaisissable et instable.',
            ],
            [
                'slug'        => 'soul_fragment',
                'name'        => 'Fragment d\'âme',
                'category'    => 'essence',
                'description' => 'Résidu d\'une conscience arrachée au passage vers l\'au-delà, collecté par Anubis et Izanami.',
            ],
            [
                'slug'        => 'solar_essence',
                'name'        => 'Essence solaire',
                'category'    => 'essence',
                'description' => 'Lumière condensée des rayons de Râ et d\'Amaterasu, chaude et purificatrice.',
            ],
            [
                'slug'        => 'knowledge_scroll',
                'name'        => 'Rouleau de savoir',
                'category'    => 'essence',
                'description' => 'Parchemin imprégné de la sagesse d\'Odin et d\'Athéna, illisible pour les ignorants.',
            ],
            [
                'slug'        => 'fish',
                'name'        => 'Poisson des profondeurs',
                'category'    => 'essence',
                'description' => 'Créature des abysses bénie par Njörðr, riche en énergie vitale et en sel marin.',
            ],
        ];

        foreach ($resources as $resource) {
            Resource::create($resource);
        }
    }
}