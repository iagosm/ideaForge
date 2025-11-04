<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        $tags = [
            'Inovação', 'Tecnologia', 'Educação', 'Sustentabilidade',
            'Empreendedorismo', 'Saúde', 'Ciência', 'Arte', 'Design', 'Finanças'
        ];

        foreach ($tags as $tag) {
            DB::table('tags')->insert([
                'name' => $tag,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
