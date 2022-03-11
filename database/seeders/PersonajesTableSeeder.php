<?php

namespace Database\Seeders;

use App\Models\Personaje;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PersonajesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    
        
        $faker = \Faker\Factory::create();

        Personaje::create([
            'nombre' => 'Rick Sánchez',
            'especie' => "Humano",
            'genero' => "Male",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        Personaje::create([
            'nombre' => 'Krombopulos Michael',
            'especie' => "Gromflomite",
            'genero' => "Male",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);




    }
}
