<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChapterDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 1; $i <= 100; $i++){
            for($j =0; $j < 4; $j++){
                DB::table('chapter_details')->insert(
                    [
                        'chapter_id' => $i ,
                        'content' => 'https://dummyimage.com/500x700/000/fff&text='.$faker->word,
                    ]
                );
            }
        }
    }
}
