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
            ],
            [
                'nom' => 'Pâte à pizza',
            ],
            [
                'nom' => 'Pâtes',
            ],
            [
                'nom' => 'Bolognaise',
            ],
            [
                'nom' => 'Salade',
            ],
            [
                'nom' => 'Tomate',
            ],
            [
                'nom' => 'Poulet',
            ],
            [
                'nom' => 'Riz',
            ],
            [
                'nom' => 'Oeufs',
            ],
            [
                'nom' => 'Petit pois',
            ],
            [
                'nom' => 'Jambon de porc',
            ],
            [
                'nom' => 'Poivron vert',
            ],
            [
                'nom' => 'Poivron rouge',
            ],
            [
                'nom' => 'Oignons',
            ],
            [
                'nom' => 'Steak haché',
            ],
            [
                'nom' => 'Fromage',
            ],
            [
                'nom' => 'Pain',
            ],
            [
                'nom' => 'Beurre',
            ],
            [
                'nom' => 'Farine',
            ],
            [
                'nom' => 'Lait',
            ]
        ]);
    }
}
