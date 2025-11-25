<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Factory para criar instâncias fake de Tag para testes.
 *
 * Exemplo de uso:
 *   Tag::factory()->create()                    // Cria + salva
 *   Tag::factory()->create(['name' => 'PHP'])  // Com nome específico
 *   Tag::factory(5)->create()                   // Cria 5 tags
 */
class TagFactory extends Factory
{
    protected $model = Tag::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word(),
            'slug' => $this->faker->unique()->slug(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
