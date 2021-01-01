<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 1; $i <= 30; $i++){
            $rand = rand(1, 4);
            $list = $faker->shuffle(range(1, 9));
            for($j =0; $j < $rand; $j++){
                DB::table('book_genres')->insert(
                    [
                        'book_id' => $i,
                        'genre_id' => $list[$j],
                    ]
                );
            }
        }
    }
}
