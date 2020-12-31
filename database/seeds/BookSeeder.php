<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 0; $i < 30; $i++){
            DB::table('books')->insert(
                [
                    'title' => $faker->sentence($nbWords = 2, $variableNbWords = true),
                    'rating' => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 5),
                    'description' => $faker->text($maxNbChars = 200),
                    'image' => 'https://dummyimage.com/500x700/222/fff&text=img not available',
                    'reads' => $faker->unique()->randomNumber,
                ]
            );

        }
    }
}
