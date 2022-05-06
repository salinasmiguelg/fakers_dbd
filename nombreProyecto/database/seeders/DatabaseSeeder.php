<?php

namespace Database\Seeders;

use \App\Models\Alumno;
use \App\Models\Curso;
use \App\Models\Seccion;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Curso::factory(20)->create();
        Seccion::factory(20)->create();
        Alumno::factory(20)->create();
        
    }
}