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
        DB::table('Plat_Ingredient')->insert([
            [
                'plat_id' => 1,
                'ingredient_id' => 1
            ],
            [
                'plat_id' => 1,
                'ingredient_id' => 2
            ],
            [
                'plat_id' => 2,
                'ingredient_id' => 3
            ],
            [
                'plat_id' => 2,
                'ingredient_id' => 4
            ],
            [
                'plat_id' => 3,
                'ingredient_id' => 5
            ],
            [
                'plat_id' => 3,
                'ingredient_id' => 6
            ],
            [
                'plat_id' => 3,
                'ingredient_id' => 7
            ],
            [
                'plat_id' => 4,
                'ingredient_id' => 8
            ],
            [
                'plat_id' => 4,
                'ingredient_id' => 9
            ],
            [
                'plat_id' => 4,
                'ingredient_id' => 10
            ],
            [
                'plat_id' => 4,
                'ingredient_id' => 11
            ],
            [
                'plat_id' => 5,
                'ingredient_id' => 6
            ],
            [
                'plat_id' => 5,
                'ingredient_id' => 9
            ],
            [
                'plat_id' => 5,
                'ingredient_id' => 12
            ],
            [
                'plat_id' => 5,
                'ingredient_id' => 13
            ],
            [
                'plat_id' => 6,
                'ingredient_id' => 5
            ],
            [
                'plat_id' => 6,
                'ingredient_id' => 6
            ],
            [
                'plat_id' => 6,
                'ingredient_id' => 13
            ],
            [
                'plat_id' => 6,
                'ingredient_id' => 14
            ],
            [
                'plat_id' => 6,
                'ingredient_id' => 15
            ],
            [
                'plat_id' => 6,
                'ingredient_id' => 16
            ],
            [
                'plat_id' => 7,
                'ingredient_id' => 3
            ],
            [
                'plat_id' => 7,
                'ingredient_id' => 15
            ],
            [
                'plat_id' => 7,
                'ingredient_id' => 17
            ],
            [
                'plat_id' => 7,
                'ingredient_id' => 18
            ],
            [
                'plat_id' => 7,
                'ingredient_id' => 19
            ],
            [
                'plat_id' => 8,
                'ingredient_id' => 11
            ],
            [
                'plat_id' => 8,
                'ingredient_id' => 16
            ],
            [
                'plat_id' => 8,
                'ingredient_id' => 17
            ],
            [
                'plat_id' => 8,
                'ingredient_id' => 20
            ]
        ]);
    }
}
