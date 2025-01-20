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
                'plat_id' => 1, 'ingredient_id' => 1
            ],
            [
                'plat_id' => 1, 'ingredient_id' => 2
            ],['plat_id' => 1, 'ingredient_id' => 39], // sauce tomate
            [
                'plat_id' => 2, 'ingredient_id' => 3
            ],
            [
                'plat_id' => 2, 'ingredient_id' => 4
            ],
            ['plat_id' => 2, 'ingredient_id' => 39], // sauce tomate
            [
                'plat_id' => 3, 'ingredient_id' => 5
            ],
            [
                'plat_id' => 3, 'ingredient_id' => 6
            ],
            [
                'plat_id' => 3, 'ingredient_id' => 7
            ],
            [
                'plat_id' => 4, 'ingredient_id' => 8
            ],
            [
                'plat_id' => 4, 'ingredient_id' => 9
            ],
            [
                'plat_id' => 4, 'ingredient_id' => 10
            ],
            [
                'plat_id' => 4, 'ingredient_id' => 11
            ],
            [
                'plat_id' => 5, 'ingredient_id' => 6
            ],
            [
                'plat_id' => 5, 'ingredient_id' => 9
            ],
            [
                'plat_id' => 5, 'ingredient_id' => 12
            ],
            [
                'plat_id' => 5, 'ingredient_id' => 13
            ],
            [
                'plat_id' => 6, 'ingredient_id' => 5
            ],
            [
                'plat_id' => 6, 'ingredient_id' => 6
            ],
            [
                'plat_id' => 6, 'ingredient_id' => 13
            ],
            [
                'plat_id' => 6,'ingredient_id' => 14
            ],
            [
                'plat_id' => 6,'ingredient_id' => 15
            ],
            [
                'plat_id' => 6,'ingredient_id' => 16
            ],
            [
                'plat_id' => 7,'ingredient_id' => 3
            ],
            [
                'plat_id' => 7,'ingredient_id' => 15
            ],
            [
                'plat_id' => 7,'ingredient_id' => 17
            ],
            [
                'plat_id' => 7,'ingredient_id' => 18
            ],
            [
                'plat_id' => 7,'ingredient_id' => 19
            ],
            [
                'plat_id' => 8,'ingredient_id' => 11
            ],
            [
                'plat_id' => 8,'ingredient_id' => 16
            ],
            [
                'plat_id' => 8,'ingredient_id' => 17
            ],
            [
                'plat_id' => 8,'ingredient_id' => 20
            ],
            // Blanquette
            ['plat_id' => 9, 'ingredient_id' => 8], // Riz
            ['plat_id' => 9, 'ingredient_id' => 13], // Oignons
            ['plat_id' => 9, 'ingredient_id' => 23], // Champignons
            ['plat_id' => 9, 'ingredient_id' => 31], // veau

            // Plat 10 : Pâtes carbonara
            ['plat_id' => 10, 'ingredient_id' => 3], // Pâtes
            ['plat_id' => 10, 'ingredient_id' => 9], // Œufs
            ['plat_id' => 10, 'ingredient_id' => 28], // Lardons
            ['plat_id' => 10, 'ingredient_id' => 15], // Fromage
            ['plat_id' => 10, 'ingredient_id' => 13], // Oignons

            // Plat 11 : Tarte au thon
            ['plat_id' => 11, 'ingredient_id' => 6], // Tomate
            ['plat_id' => 11, 'ingredient_id' => 33], // Moutarde
            ['plat_id' => 11, 'ingredient_id' => 21], // Crème fraîche
            ['plat_id' => 11, 'ingredient_id' => 15], // Fromage
            ['plat_id' => 11, 'ingredient_id' => 34], // thon

            // Plat 12 : Hachis parmentier
            ['plat_id' => 12, 'ingredient_id' => 22], // Viande hachée
            ['plat_id' => 12, 'ingredient_id' => 6], // Tomate
            ['plat_id' => 12, 'ingredient_id' => 30], // Pommes de terre
            ['plat_id' => 12, 'ingredient_id' => 17], // beurre
            ['plat_id' => 12, 'ingredient_id' => 19], // lait
            ['plat_id' => 12, 'ingredient_id' => 15], // fromage

            // Plat 13 : Steak tartare
            ['plat_id' => 13, 'ingredient_id' => 14], // Steak haché
            ['plat_id' => 13, 'ingredient_id' => 9], // Œufs
            ['plat_id' => 13, 'ingredient_id' => 33], // Moutarde
            ['plat_id' => 13, 'ingredient_id' => 20], // Cornichon

            // Plat 14 : Galette bretonne
            ['plat_id' => 14, 'ingredient_id' => 5], // Salade
            ['plat_id' => 14, 'ingredient_id' => 13], // Oignons
            ['plat_id' => 14, 'ingredient_id' => 15], // fromage
            ['plat_id' => 14, 'ingredient_id' => 11], // jambon
            ['plat_id' => 14, 'ingredient_id' => 9], // oeufs

            // Plat 15 : Gratin dauphinois
            ['plat_id' => 15, 'ingredient_id' => 30], // Pommes de terre
            ['plat_id' => 15, 'ingredient_id' => 17], // Beurre

            // Plat 16 : Bœuf bourguignon
            ['plat_id' => 16, 'ingredient_id' => 35], // boeuf
            ['plat_id' => 16, 'ingredient_id' => 27], // Vin rouge
            ['plat_id' => 16, 'ingredient_id' => 13], // Oignons
            ['plat_id' => 16, 'ingredient_id' => 32], // carottes
            ['plat_id' => 16, 'ingredient_id' => 23], // champignons

            // Plat 17 : Cassoulet
            ['plat_id' => 17, 'ingredient_id' => 26], // Haricots blancs
            ['plat_id' => 17, 'ingredient_id' => 36], // saucisse
            ['plat_id' => 17, 'ingredient_id' => 16], // pain

            // Plat 18 : Tomates farcies
            ['plat_id' => 18, 'ingredient_id' => 6], // Tomate
            ['plat_id' => 18, 'ingredient_id' => 22], // Viande hachée
            ['plat_id' => 18, 'ingredient_id' => 12], // Poivron
            ['plat_id' => 18, 'ingredient_id' => 13], // Oignons
            ['plat_id' => 18, 'ingredient_id' => 39], // sauce tomate

            // Plat 19 : Rôti de bœuf (rosbif)
            ['plat_id' => 19, 'ingredient_id' => 37], // roti
            ['plat_id' => 19, 'ingredient_id' => 13], // Oignons
            ['plat_id' => 19, 'ingredient_id' => 6], // Tomate
            ['plat_id' => 19, 'ingredient_id' => 12], // Poivron

            // Plat 20 : Ratatouille
            ['plat_id' => 20, 'ingredient_id' => 24], // Courgette
            ['plat_id' => 20, 'ingredient_id' => 25], // Aubergine
            ['plat_id' => 20, 'ingredient_id' => 6], // Tomate
            ['plat_id' => 20, 'ingredient_id' => 12], // Poivron

            // Plat 21 : Croque-monsieur
            ['plat_id' => 21, 'ingredient_id' => 16], // Pain
            ['plat_id' => 21, 'ingredient_id' => 11], // Jambon
            ['plat_id' => 21, 'ingredient_id' => 15], // Fromage

            // Plat 22 : Les sushi
            ['plat_id' => 22, 'ingredient_id' => 1], // Saumon
            ['plat_id' => 22, 'ingredient_id' => 8], // Riz

            // Plat 23 : Quiche lorraine
            ['plat_id' => 23, 'ingredient_id' => 15], // Fromage
            ['plat_id' => 23, 'ingredient_id' => 18], // Farine
            ['plat_id' => 23, 'ingredient_id' => 19], // Lait
            ['plat_id' => 23, 'ingredient_id' => 28], // Lardons

            // Plat 24 : Poulet basquaise
            ['plat_id' => 24, 'ingredient_id' => 7], // Poulet
            ['plat_id' => 24, 'ingredient_id' => 12], // Poivron
            ['plat_id' => 24, 'ingredient_id' => 6], // Tomate
            ['plat_id' => 24, 'ingredient_id' => 13], // Oignons

            // Plat 25 : Paella
            ['plat_id' => 25, 'ingredient_id' => 8], // Riz
            ['plat_id' => 25, 'ingredient_id' => 12], // Poivron
            ['plat_id' => 25, 'ingredient_id' => 6], // Tomate
            ['plat_id' => 25, 'ingredient_id' => 29], // Safran
            ['plat_id' => 25, 'ingredient_id' => 7], // Poulet
            ['plat_id' => 25, 'ingredient_id' => 38] // fruits de mer
        ]);
    }
}
