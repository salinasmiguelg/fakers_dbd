<?php

namespace Database\Factories;

use App\Models\Alumno;
use App\Models\Seccion;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Alumno::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nombre'=> $this->faker->name($gender = null),
            'correo'=> $this->faker->email(),
            'rut'=> $this->faker->numberBetween($min = 1000000, $max = 30000000),
            'modalidad'=> $this->faker->randomElement($array = array ('diurno' , 'vespertino')),
            'situacion'=> $this->faker->randomElement($array = array ('aprobado' , 'reprobado')),
            'id_seccion' => Seccion::all()->random()->id
        ];
    }
}
