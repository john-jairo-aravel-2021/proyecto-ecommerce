<?php

namespace Database\Factories;

use App\Models\producto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = producto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
            'nombre' => $this->faker->randomElement(['Celular','Televisor','Computador','Table','Monitor','CPU']),
            'precio' => $this->faker->randomfloat(2,500000,900000),
            'activo' => $this->faker->boolean,
            'imagen' => $this->faker->imageUrl($width = 640, $height = 480),
        ];
    }
}
