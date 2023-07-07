<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cesta;
use App\Models\Reestoque;
use App\Models\MeuEstoque;

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

            if ($this->faker->boolean(1)) {
                return;
            }
            
            $cestas_meu_estoque = MeuEstoque::where('cesta_id', null)
                ->inRandomOrder()
                ->take(rand(0, 8))
                ->get();

            $cestas_reestoque = Reestoque::where('cesta_id', null)
                ->inRandomOrder()
                ->take(rand(0, 6))
                ->get();

            foreach ($cestas_meu_estoque as $meu_estoque) {
                $meu_estoque->cesta_id = $cesta->id;
                $meu_estoque->save();
            }
            
            foreach ($cestas_reestoque as $reestoque) {
                $reestoque->cesta_id = $cesta->id;
                $reestoque->save();
            }

            $count_meu_estoque = MeuEstoque::where('cesta_id', $cesta->id)->count();
            $count_reestoque = Reestoque::where('cesta_id', $cesta->id)->count();

            if ($count_meu_estoque == 0 || $count_reestoque > 0) {
                return;
            }

            $cesta->pronta = 1;
            $cesta->save();
        });
    }
}
