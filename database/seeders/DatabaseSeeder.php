<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{
    Cesta,
    AlimentoSistema,
    MeuEstoque,
    Reestoque
};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        AlimentoSistema::factory(100)->create();
        MeuEstoque::factory(30)->create();
        Reestoque::factory(10)->create();
        Cesta::factory(6)->create();
    }
}
