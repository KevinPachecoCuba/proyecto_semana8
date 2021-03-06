<?php

namespace Database\Factories;

use App\Models\Cita;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cita::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idpaciente' => $this->faker->randomDigitNotNull,
        'fecha_cita' => $this->faker->date('Y-m-d H:i:s'),
        'iddoctor' => $this->faker->randomDigitNotNull
        ];
    }
}
