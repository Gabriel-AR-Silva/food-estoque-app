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
        AlimentoSistema::factory(50)->create();
        MeuEstoque::factory(20)->create();
        Reestoque::factory(1)->create();
        Cesta::factory(8)->create();
    }
}
