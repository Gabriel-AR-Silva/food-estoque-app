<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{
    Cesta,
    AlimentoSistema,
    MeuEstoque
};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        AlimentoSistema::factory(150)->create();
        Cesta::factory(20)->create();
        MeuEstoque::factory(80)->create();
    }
}
