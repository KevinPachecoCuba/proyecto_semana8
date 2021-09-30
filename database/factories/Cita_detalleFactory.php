<?php

namespace Database\Factories;

use App\Models\Cita_detalle;
use Illuminate\Database\Eloquent\Factories\Factory;

class Cita_detalleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cita_detalle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idcita' => $this->faker->randomDigitNotNull
        ];
    }
}
