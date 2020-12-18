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
        
        DB::table('genres')->insert($data);
    }
}
