<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dado;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Exemplo de inserção de dados na tabela 'dados'
        Dado::create([
            'cidade' => 'Teste City',
            'populacao' => 1000000, // Substitua pelo valor desejado
            'populacao' => 1000000, // Substitua pelo valor desejado
            'populacao_ano_passado' => 100000, // Substitua pelo valor desejado
        ]);
    }
}
