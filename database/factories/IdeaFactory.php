<?php

namespace Database\Factories;

use App\Models\Idea;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Factory para criar instâncias fake de Idea para testes.
 *
 * Exemplo de uso:
 *   Idea::factory()->create()                    // Cria + salva no BD
 *   Idea::factory()->make()                      // Cria mas não salva
 *   Idea::factory(5)->create()                   // Cria 5 ideias
 *   Idea::factory()->create(['user_id' => 1])   // Cria com user específico
 */
class IdeaFactory extends Factory
{
    protected $model = Idea::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
