<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nivel'=> $this->faker->numberBetween($min = 1, $max = 12),
            'malla'=> $this->faker->randomElement($array = array ('Civil2014' , 'Civil2020', 'Ejecu2014', 'Ejecu2018')),
            'nombre_curso'=> $this->faker->randomElement($array = array ('Peradigmas' , 'DBD', 'EDECO', 'Orga' , 'EDA'))
        ];
    }
}