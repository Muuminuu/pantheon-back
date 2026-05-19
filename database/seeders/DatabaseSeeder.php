<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            ResourceSeeder::class,  // doit passer avant PotionSeeder (FK potion_recipes)
            GodSeeder::class,
            PotionSeeder::class,    // crée potions + recettes en une passe
            PlayerSeeder::class
        ]);

    }
}
