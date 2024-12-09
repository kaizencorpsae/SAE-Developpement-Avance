<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Ingredient;
use App\Models\Plat;
use App\Models\Plat_Ingredient;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Image::insert([
            'id' => 1,
            'url' => ('https://i.pinimg.com/736x/a8/3a/f8/a83af885b290905d426dc04c414fa945.jpg')
        ],
        [
            'id' => 2,
            'url' => ('https://i.pinimg.com/736x/6c/82/bb/6c82bbcc024742add3bfb9b15638a2d0.jpg')
        ],
        [
            'id' => 3,
            'url' => ('https://i.pinimg.com/736x/4e/76/52/4e76529f0d4b0ce2a28ea1899a50f755.jpg')
        ],
        [
            'id' => 4,
            'url' => ('https://i.pinimg.com/736x/b2/af/0c/b2af0c44e34eb24d33a0538fe1406598.jpg')
        ],
        [
            'id' => 5,
            'url' => ('https://fatsecretfrance.fr/wp-content/uploads/2023/12/Shakshuka-1.png'),
        ],
        [
            'id' => 6,
            'url' => ('https://api.toutlevin.com/images/5246262ff9b387d2dae7e4f1579af965.jpg?width=1200&quality=75')
        ],
        [
            'id' => 7,
            'url' => ('https://images.services.kitchenstories.io/FQPoYXqopSF8apn6ZCB6uEaXVyk=/3840x0/filters:quality(85)/images.kitchenstories.io/wagtailOriginalImages/R3072-final-photo-2.jpg')
        ]);

        Plat::insert([
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
            ]);

        Ingredient::insert([
            'nom' => 'Saumon',
        ],
        [
            'nom' => 'Pâte à pizza'
        ],
            [
                'nom' => 'Pâtes'
            ],
            [
                'nom' => 'Bolognaise'
            ],
            [
                'nom' => 'Salade'
            ],
            [
                'nom' => 'Tomate'
            ],
            [
                'nom' => 'Poulet'
            ],
            [
                'nom' => 'Riz'
            ],
            [
                'nom' => 'Oeufs'
            ],
            [
                'nom' => 'Petit pois'
            ],
        [
                'nom' => 'Jambon de porc'
            ],
        [
            'nom' => 'Poivron vert'
        ],
        [
            'nom' => 'Poivron rouge'
        ],
            [
                'nom' => 'Oignons'
            ],
            [
                'nom' => 'Steak haché'
            ],
            [
                'nom' => 'Fromage'
            ],
            [
                'nom' => 'Pain'
            ],
            [
                'nom' => 'Beurre'
            ],
            [
                'nom' => 'Farine'
            ],
            [
                'nom' => 'Lait'
            ]);

        Plat_ingredient::insert([
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
                'plat_id' => 5,
                'ingredient_id' => 14
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
                'plat_id' => 6,
                'ingredient_id' => 17
            ],
            [
                'plat_id' => 7,
                'ingredient_id' => 3
            ],
            [
                'plat_id' => 7,
                'ingredient_id' => 16
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
                'plat_id' => 7,
                'ingredient_id' => 20
            ]
        ]);

    }
}
