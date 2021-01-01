<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $faker->seed(1234);
        // $populator = new \Faker\ORM\Propel\Populator($faker);
        // $populator->addEntity('Chapter', 100);
        // $insertedPKs = $populator->execute();
        for($i = 0; $i < 100; $i++){
            DB::table('chapters')->insert(
                [
                    'book_id' => $faker->numberBetween($min = 1, $max = 30) ,
                    'title' => $faker->word,
                ]
            );

        }
    }
}
