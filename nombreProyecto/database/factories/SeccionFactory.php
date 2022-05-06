<?php

namespace Database\Factories;

use App\Models\Seccion;
use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeccionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Seccion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'profesor'=> $this->faker->name($gender = null),
            'codigo_seccion'=> $this->faker->randomElement($array = array ('A1' , 'B2', 'C3', 'D4')),
            'horario'=> $this->faker->randomElement($array = array ('L5W2V3' , 'L1L2W1', 'L6M1W6', 'M6J6V1')),
            'id_cursos' => Curso::all()->random()->id
        ];
    }
}