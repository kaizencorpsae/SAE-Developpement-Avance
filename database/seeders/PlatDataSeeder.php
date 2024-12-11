<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Plats')->insert([
            [
                'nom' => 'Pizza saumon',
                'description' => 'Pizza avec du saumon',
                'image_id' => 1
            ],
            [
                'nom' => 'Pâtes bolognaise',
                'description' => 'Pâtes bolognaise composé de pâtes et de sauce bolognaise',
                'image_id' => 2
            ],
            [
                'nom' => 'Tacos',
                'description' => 'Tacos trois viandes, salade, tomate, oignons',
                'image_id' => 3
            ],
            [
                'nom' => 'Riz cantonnais',
                'description' => 'Riz frit avec des oeufs, petit pois et jambon de porc',
                'image_id' => 4
            ],
            [
                'nom' => 'Shakshuka',
                'description' => 'Plat à base d’oeufs poché, de tomates et d’autres légumes tel que des poivrons',
                'image_id' => 5
            ],
            [
                'nom' => 'Hamburger',
                'description' => 'Pain de hamburger, steak haché, tranche de fromage, salade, tomate, oignons',
                'image_id' => 6
            ],
            [
                'nom' => 'Mac n Cheese',
                'description' => 'Des pâtes aux fromages très crémeuses',
                'image_id' => 7
            ]
        ]);
    }
}
