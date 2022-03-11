<?php

namespace Database\Seeders;

use App\Models\Episodio;
use App\Models\Especie;
use Illuminate\Database\Seeder;

class EpisodiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        $faker = \Faker\Factory::create();

        Episodio::create([
            'personaje_id' => 1,
            'url' => 'https://www.youtube.com/watch?v=RNQPOsqapFk'
        ]);


        Episodio::create([
            'personaje_id' => 1,
            'url' => 'https://www.youtube.com/watch?v=NNb-PTBEXT0'
        ]);

        Episodio::create([
            'personaje_id' => 2,
            'url' => 'https://www.youtube.com/watch?v=mB267cU64bo'
        ]);
    }
}
