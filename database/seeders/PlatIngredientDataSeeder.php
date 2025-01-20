<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatIngredientDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('plat_ingredient')->insert([
            ['plat_id' => 1, 'ingredient_id' => 1],
            ['plat_id' => 1, 'ingredient_id' => 2],
            ['plat_id' => 1, 'ingredient_id' => 39],

            ['plat_id' => 2, 'ingredient_id' => 3],
            ['plat_id' => 2, 'ingredient_id' => 4],
            ['plat_id' => 2, 'ingredient_id' => 39],

            ['plat_id' => 3, 'ingredient_id' => 5],
            ['plat_id' => 3, 'ingredient_id' => 6],
            ['plat_id' => 3, 'ingredient_id' => 7],

            ['plat_id' => 4, 'ingredient_id' => 8],
            ['plat_id' => 4, 'ingredient_id' => 9],
            ['plat_id' => 4, 'ingredient_id' => 10],
            ['plat_id' => 4, 'ingredient_id' => 11],

            ['plat_id' => 5, 'ingredient_id' => 6],
            ['plat_id' => 5, 'ingredient_id' => 9],
            ['plat_id' => 5, 'ingredient_id' => 12],
            ['plat_id' => 5, 'ingredient_id' => 13],

            ['plat_id' => 6, 'ingredient_id' => 5],
            ['plat_id' => 6, 'ingredient_id' => 6],
            ['plat_id' => 6, 'ingredient_id' => 13],
            ['plat_id' => 6,'ingredient_id' => 14],
            ['plat_id' => 6,'ingredient_id' => 15],
            ['plat_id' => 6,'ingredient_id' => 16],

            ['plat_id' => 7,'ingredient_id' => 3],
            ['plat_id' => 7,'ingredient_id' => 15],
            ['plat_id' => 7,'ingredient_id' => 17],
            ['plat_id' => 7,'ingredient_id' => 18],
            ['plat_id' => 7,'ingredient_id' => 19],

            ['plat_id' => 8,'ingredient_id' => 11],
            ['plat_id' => 8,'ingredient_id' => 16],
            ['plat_id' => 8,'ingredient_id' => 17],
            ['plat_id' => 8,'ingredient_id' => 20],

            ['plat_id' => 9, 'ingredient_id' => 8],
            ['plat_id' => 9, 'ingredient_id' => 13],
            ['plat_id' => 9, 'ingredient_id' => 23],
            ['plat_id' => 9, 'ingredient_id' => 31],

            ['plat_id' => 10, 'ingredient_id' => 3],
            ['plat_id' => 10, 'ingredient_id' => 9],
            ['plat_id' => 10, 'ingredient_id' => 28],
            ['plat_id' => 10, 'ingredient_id' => 15],
            ['plat_id' => 10, 'ingredient_id' => 13],

            ['plat_id' => 11, 'ingredient_id' => 6],
            ['plat_id' => 11, 'ingredient_id' => 33],
            ['plat_id' => 11, 'ingredient_id' => 21],
            ['plat_id' => 11, 'ingredient_id' => 15],
            ['plat_id' => 11, 'ingredient_id' => 34],

            ['plat_id' => 12, 'ingredient_id' => 22],
            ['plat_id' => 12, 'ingredient_id' => 6],
            ['plat_id' => 12, 'ingredient_id' => 30],
            ['plat_id' => 12, 'ingredient_id' => 17],
            ['plat_id' => 12, 'ingredient_id' => 19],
            ['plat_id' => 12, 'ingredient_id' => 15],

            ['plat_id' => 13, 'ingredient_id' => 14],
            ['plat_id' => 13, 'ingredient_id' => 9],
            ['plat_id' => 13, 'ingredient_id' => 33],
            ['plat_id' => 13, 'ingredient_id' => 20],

            ['plat_id' => 14, 'ingredient_id' => 5],
            ['plat_id' => 14, 'ingredient_id' => 13],
            ['plat_id' => 14, 'ingredient_id' => 15],
            ['plat_id' => 14, 'ingredient_id' => 11],
            ['plat_id' => 14, 'ingredient_id' => 9],

            ['plat_id' => 15, 'ingredient_id' => 30],
            ['plat_id' => 15, 'ingredient_id' => 17],

            ['plat_id' => 16, 'ingredient_id' => 35],
            ['plat_id' => 16, 'ingredient_id' => 27],
            ['plat_id' => 16, 'ingredient_id' => 13],
            ['plat_id' => 16, 'ingredient_id' => 32],
            ['plat_id' => 16, 'ingredient_id' => 23],

            ['plat_id' => 17, 'ingredient_id' => 26],
            ['plat_id' => 17, 'ingredient_id' => 36],
            ['plat_id' => 17, 'ingredient_id' => 16],

            ['plat_id' => 18, 'ingredient_id' => 6],
            ['plat_id' => 18, 'ingredient_id' => 22],
            ['plat_id' => 18, 'ingredient_id' => 12],
            ['plat_id' => 18, 'ingredient_id' => 13],
            ['plat_id' => 18, 'ingredient_id' => 39],

            ['plat_id' => 19, 'ingredient_id' => 37],
            ['plat_id' => 19, 'ingredient_id' => 13],
            ['plat_id' => 19, 'ingredient_id' => 6],
            ['plat_id' => 19, 'ingredient_id' => 12],

            ['plat_id' => 20, 'ingredient_id' => 24],
            ['plat_id' => 20, 'ingredient_id' => 25],
            ['plat_id' => 20, 'ingredient_id' => 6],
            ['plat_id' => 20, 'ingredient_id' => 12],

            ['plat_id' => 21, 'ingredient_id' => 16],
            ['plat_id' => 21, 'ingredient_id' => 11],
            ['plat_id' => 21, 'ingredient_id' => 15],

            ['plat_id' => 22, 'ingredient_id' => 1],
            ['plat_id' => 22, 'ingredient_id' => 8],

            ['plat_id' => 23, 'ingredient_id' => 15],
            ['plat_id' => 23, 'ingredient_id' => 18],
            ['plat_id' => 23, 'ingredient_id' => 19],
            ['plat_id' => 23, 'ingredient_id' => 28],

            ['plat_id' => 24, 'ingredient_id' => 7],
            ['plat_id' => 24, 'ingredient_id' => 12],
            ['plat_id' => 24, 'ingredient_id' => 6],
            ['plat_id' => 24, 'ingredient_id' => 13],

            ['plat_id' => 25, 'ingredient_id' => 8],
            ['plat_id' => 25, 'ingredient_id' => 12],
            ['plat_id' => 25, 'ingredient_id' => 6],
            ['plat_id' => 25, 'ingredient_id' => 29],
            ['plat_id' => 25, 'ingredient_id' => 7],
            ['plat_id' => 25, 'ingredient_id' => 38]
        ]);
    }
}
