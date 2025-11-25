<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Idea;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Factory para criar instâncias fake de Comment para testes.
 *
 * Exemplo de uso:
 *   Comment::factory()->create()                          // Cria + salva
 *   Comment::factory()->create(['idea_id' => 5])          // Com ideia específica
 *   Comment::factory(10)->create()                        // Cria 10 comentários
 */
class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'idea_id' => Idea::factory(),
            'content' => $this->faker->paragraph(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
