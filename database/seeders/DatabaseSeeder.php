<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Usuário principal
        User::factory()->create([
            'name' => 'Iago Sousa',
            'email' => 'iago@example.com',
            'password' => bcrypt('12345678'),
        ]);

        // Tags iniciais
        $tags = [
            'Tecnologia',
            'Negócios',
            'Educação',
            'Design',
            'Saúde',
            'IA e Machine Learning',
            'Sustentabilidade',
        ];

        foreach ($tags as $tag) {
            Tag::create(['name' => $tag]);
        }

        // Exemplo: gerar alguns usuários de teste
        User::factory(5)->create();
    }
}