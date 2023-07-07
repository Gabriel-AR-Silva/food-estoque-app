<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cesta;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cesta>
 */
class CestaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Cesta::class;

    public function definition(): array
    {
        return [
            'titulo' => $this->faker->realText(rand(10, 105)),
            'descricao' => $this->faker->realText(rand(10, 350)),
            'foto' => $this->faker->imageUrl(),
            'pronta' => 0
        ];
    }

    public function configure() {
        return $this->afterCreating(function (Cesta $cesta) {
            $cestas_reestoque = \App\Models\Reestoque::where('cesta_id', $cesta->id)->count();
            $cestas_meu_estoque = \App\Models\MeuEstoque::where('cesta_id', $cesta->id)->count();

            if($cestas_reestoque > 0 || $cestas_meu_estoque == 0){ 
                return; 
            }

            $cesta->pronta = 1;
            $cesta->save();
        });
    }
}
