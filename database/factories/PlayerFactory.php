<?php

namespace Database\Factories;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake('fr_FR')->userName(),
            'level' => 1,
            'xp' => 0,
            'gold' => 0,
            'last_login_at' => null
        ];
    }

    public function withProgress(): static
    {
        return $this->state(fn () => [
            'level' => fake()->numberBetween(2, 10),
            'xp'    => fake()->numberBetween(50, 500),
            'gold'  => fake()->numberBetween(100, 1000),
        ]);
    }

}
