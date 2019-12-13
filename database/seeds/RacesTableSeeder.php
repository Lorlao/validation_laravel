<?php

use Illuminate\Database\Seeder;

class RacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('races')->insert([
            'name' => 'Tigre',
            'classification' => 'Carnivore',
            'life' => 16,
        ]);

        DB::table('races')->insert([
            'name' => 'Panda',
            'classification' => 'Mammifère',
            'life' => 20,
        ]);

        DB::table('races')->insert([
            'name' => 'Éléphant',
            'classification' => 'Mammifère',
            'life' => 50,
        ]);

        DB::table('races')->insert([
            'name' => 'Girafe',
            'classification' => 'Mammifère',
            'life' => 15,
        ]);

        DB::table('races')->insert([
            'name' => 'Koala',
            'classification' => 'Mammifère',
            'life' => 15,
        ]);
    }
}
