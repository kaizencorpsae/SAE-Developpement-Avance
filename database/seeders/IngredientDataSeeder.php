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
                'nom' => 'Œufs',
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
            ],
            [
                'id' => 20,
                'nom' => 'Cornichon',
                'image_id' => 119
            ],
            [
                'id' => 21,
                'nom' => 'Crème fraîche',
                'image_id' => 120
            ],
            [
                'id' => 22,
                'nom' => 'Viande hachée',
                'image_id' => 121
            ],
            [
                'id' => 23,
                'nom' => 'Champignons',
                'image_id' => 122
            ],
            [
                'id' => 24,
                'nom' => 'Courgette',
                'image_id' => 123
            ],
            [
                'id' => 25,
                'nom' => 'Aubergine',
                'image_id' => 124
            ],
            [
                'id' => 26,
                'nom' => 'Haricots blancs',
                'image_id' => 125
            ],
            [
                'id' => 27,
                'nom' => 'Vin rouge',
                'image_id' => 126
            ],
            [
                'id' => 28,
                'nom' => 'Lardon',
                'image_id' => 127
            ],
            [
                'id' => 29,
                'nom' => 'Safran',
                'image_id' => 128
            ],
            [
                'id' => 30,
                'nom' => 'Pommes de terre',
                'image_id' => 129
            ],
            [
                'id' => 31,
                'nom' => 'Viande de veau',
                'image_id' => 130
            ],
            [
                'id' => 32,
                'nom' => 'Carottes',
                'image_id' => 131
            ],
            [
                'id' => 33,
                'nom' => 'Moutarde',
                'image_id' => 132
            ],
            [
                'id' => 34,
                'nom' => 'Thon',
                'image_id' => 133
            ],
            [
                'id' => 35,
                'nom' => 'Bœuf',
                'image_id' => 134
            ],
            [
                'id' => 36,
                'nom' => 'Saucisse',
                'image_id' => 135
            ],
            [
                'id' => 37,
                'nom' => 'Rôti',
                'image_id' => 136
            ],
            [
                'id' => 38,
                'nom' => 'Fruits de mer',
                'image_id' => 137
            ],
            [
                'id' => 39,
                'nom' => 'Sauce tomate',
                'image_id' => 138
            ]
        ]);
    }
}
