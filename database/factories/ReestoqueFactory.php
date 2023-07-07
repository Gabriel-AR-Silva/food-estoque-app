<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Reestoque;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ReestoqueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Reestoque::class;

    public function definition(): array
    {
        return [
            'titulo' => $this->faker->realText(rand(10, 30)),
            'descricao' => $this->faker->realText(rand(10, 100)),
            'categoria' => $this->faker->randomElement(['Frutas', 'Legumes', 'Carnes', 'Bebidas']),
            'unidade_medida' => $this->faker->randomElement(['kg', 'g', 'unidade']),
            'quantidade' => $this->faker->randomElement([
                $this->faker->numberBetween(1, 20), 
                $this->faker->randomFloat(2, 0.1, 20)
            ]),
            'foto' => $this->faker->imageUrl(),
        ];
    }
}
