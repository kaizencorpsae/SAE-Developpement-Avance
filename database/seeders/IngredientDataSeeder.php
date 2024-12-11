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
                'image_id' => 1
            ],
            [
                'nom' => 'Pâte à pizza',
                'image_id' => 1
            ],
            [
                'nom' => 'Pâtes',
                'image_id' => 1
            ],
            [
                'nom' => 'Bolognaise',
                'image_id' => 1
            ],
            [
                'nom' => 'Salade',
                'image_id' => 1
            ],
            [
                'nom' => 'Tomate',
                'image_id' => 1
            ],
            [
                'nom' => 'Poulet',
                'image_id' => 1
            ],
            [
                'nom' => 'Riz',
                'image_id' => 1
            ],
            [
                'nom' => 'Oeufs',
                'image_id' => 1
            ],
            [
                'nom' => 'Petit pois',
                'image_id' => 1
            ],
            [
                'nom' => 'Jambon de porc',
                'image_id' => 1
            ],
            [
                'nom' => 'Poivron vert',
                'image_id' => 1
            ],
            [
                'nom' => 'Poivron rouge',
                'image_id' => 1
            ],
            [
                'nom' => 'Oignons',
                'image_id' => 1
            ],
            [
                'nom' => 'Steak haché',
                'image_id' => 1
            ],
            [
                'nom' => 'Fromage',
                'image_id' => 1
            ],
            [
                'nom' => 'Pain',
                'image_id' => 1
            ],
            [
                'nom' => 'Beurre',
                'image_id' => 1
            ],
            [
                'nom' => 'Farine',
                'image_id' => 1
            ],
            [
                'nom' => 'Lait',
                'image_id' => 1
            ]
        ]);
    }
}
