<?php

use Illuminate\Database\Seeder;

class AnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert([
            'name' => 'Tigre',
            'age' => '3',
            'weight' => 90,
            'height' => 120,
            'race_id' => 1,
        ]);

        DB::table('animals')->insert([
            'name' => 'Panda',
            'age' => '2',
            'weight' => 70,
            'height' => 90,
            'race_id' => 2,
        ]);

        DB::table('animals')->insert([
            'name' => 'Éléphant',
            'age' => '4',
            'weight' => 6000,
            'height' => 300,
            'race_id' => 3,
        ]);

        DB::table('animals')->insert([
            'name' => 'Girafe',
            'age' => '1',
            'weight' => 800,
            'height' => 450,
            'race_id' => 4,
        ]);

        DB::table('animals')->insert([
            'name' => 'Koala',
            'age' => '3',
            'weight' => 10,
            'height' => 85,
            'race_id' => 5,
        ]);
    }
}
