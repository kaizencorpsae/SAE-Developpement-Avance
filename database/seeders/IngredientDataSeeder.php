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
                'nom' => 'Saumon',
                'image_id' => 9
            ],
            [
                'nom' => 'Pâte à pizza',
                'image_id' => 10
            ],
            [
                'nom' => 'Pâtes',
                'image_id' => 11
            ],
            [
                'nom' => 'Bolognaise',
                'image_id' => 12
            ],
            [
                'nom' => 'Salade',
                'image_id' => 13
            ],
            [
                'nom' => 'Tomate',
                'image_id' => 14
            ],
            [
                'nom' => 'Poulet',
                'image_id' => 15
            ],
            [
                'nom' => 'Riz',
                'image_id' => 16
            ],
            [
                'nom' => 'Oeufs',
                'image_id' => 17
            ],
            [
                'nom' => 'Petit pois',
                'image_id' => 18
            ],
            [
                'nom' => 'Jambon de porc',
                'image_id' => 19
            ],
            [
                'nom' => 'Poivron',
                'image_id' => 20
            ],
            [
                'nom' => 'Oignons',
                'image_id' => 21
            ],
            [
                'nom' => 'Steak haché',
                'image_id' => 22
            ],
            [
                'nom' => 'Fromage',
                'image_id' => 23
            ],
            [
                'nom' => 'Pain',
                'image_id' => 24
            ],
            [
                'nom' => 'Beurre',
                'image_id' => 25
            ],
            [
                'nom' => 'Farine',
                'image_id' => 26
            ],
            [
                'nom' => 'Lait',
                'image_id' => 27
            ]
        ]);
    }
}
