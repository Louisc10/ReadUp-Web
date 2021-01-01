<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    
    public function run()
    {
        $data = [
            [
                'name' => 'Action',
            ],
            [
                'name' => 'Adventure',
            ],
            [
                'name' => 'Comedy',
            ],
            [
                'name' => 'Cooking',
            ],
            [
                'name' => 'Drama',
            ],
            [
                'name' => 'Isekai',
            ],
            [
                'name' => 'Mystery',
            ],
            [
                'name' => 'Romance',
            ],
            [
                'name' => 'Slice of Life',
            ],
        ];

        // $faker = Faker\Factory::create();
        // for($i = 0; $i < 1000; $i++){
        //     DB::table('genres')->insert([
        //         'name' => $faker->sentence($nbWords = 2, $variableNbWords = true),
        //     ]);
        // }
        
        DB::table('genres')->insert($data);
    }
}
