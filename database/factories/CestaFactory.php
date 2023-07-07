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
            'title' => $this->faker->realText(rand(10, 105)),
            'descricao' => $this->faker->realText(rand(10, 350)),
            'foto' => $this->faker->imageUrl()
        ];
    }
}
