<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Ingredients')->insert([
            [
                'id' => 1,
                'nom' => 'Saumon',
                'image_id' => 100
            ],
            [
                'id' => 2,
                'nom' => 'Pâte à pizza',
                'image_id' => 101
            ],
            [
                'id' => 3,
                'nom' => 'Pâtes',
                'image_id' => 102
            ],
            [
                'id' => 4,
                'nom' => 'Bolognaise',
                'image_id' => 103
            ],
            [
                'id' => 5,
                'nom' => 'Salade',
                'image_id' => 104
            ],
            [
                'id' => 6,
                'nom' => 'Tomate',
                'image_id' => 105
            ],
            [
                'id' => 7,
                'nom' => 'Poulet',
                'image_id' => 106
            ],
            [
                'id' => 8,
                'nom' => 'Riz',
                'image_id' => 107
            ],
            [
                'id' => 9,
                'nom' => 'Oeufs',
                'image_id' => 108
            ],
            [
                'id' => 10,
                'nom' => 'Petit pois',
                'image_id' => 109
            ],
            [
                'id' => 11,
                'nom' => 'Jambon',
                'image_id' => 110
            ],
            [
                'id' => 12,
                'nom' => 'Poivron',
                'image_id' => 111
            ],
            [
                'id' => 13,
                'nom' => 'Oignons',
                'image_id' => 112
            ],
            [
                'id' => 14,
                'nom' => 'Steak haché',
                'image_id' => 113
            ],
            [
                'id' => 15,
                'nom' => 'Fromage',
                'image_id' => 114
            ],
            [
                'id' => 16,
                'nom' => 'Pain',
                'image_id' => 115
            ],
            [
                'id' => 17,
                'nom' => 'Beurre',
                'image_id' => 116
            ],
            [
                'id' => 18,
                'nom' => 'Farine',
                'image_id' => 117
            ],
            [
                'id' => 19,
                'nom' => 'Lait',
                'image_id' => 118
            ]
        ]);
    }
}
