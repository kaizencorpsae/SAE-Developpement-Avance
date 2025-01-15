<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Images pour les plats
        DB::table('Images')->insert([
            [
                'id' => 1,
                'url' => ('./images/unknownimage.png')
            ],
            [
                'id' => 2,
                'url' => ('https://i.pinimg.com/736x/a8/3a/f8/a83af885b290905d426dc04c414fa945.jpg')
            ],
            [
                'id' => 3,
                'url' => ('https://i.pinimg.com/736x/6c/82/bb/6c82bbcc024742add3bfb9b15638a2d0.jpg')
            ],
            [
                'id' => 4,
                'url' => ('https://croc-gourmand.fr/wp-content/uploads/2021/04/french-tacos-2048x1638.jpeg')
            ],
            [
                'id' => 5,
                'url' => ('https://i.pinimg.com/736x/b2/af/0c/b2af0c44e34eb24d33a0538fe1406598.jpg')
            ],
            [
                'id' => 6,
                'url' => ('https://fatsecretfrance.fr/wp-content/uploads/2023/12/Shakshuka-1.png'),
            ],
            [
                'id' => 7,
                'url' => ('https://api.toutlevin.com/images/5246262ff9b387d2dae7e4f1579af965.jpg?width=1200&quality=100')
            ],
            [
                'id' => 8,
                'url' => ('https://images.services.kitchenstories.io/FQPoYXqopSF8apn6ZCB6uEaXVyk=/3840x0/filters:quality(85)/images.kitchenstories.io/wagtailOriginalImages/R3072-final-photo-2.jpg')
            ],
            [
                'id' => 9,
                'url' => ('https://fabriquedelices.com/wp-content/uploads/2020/10/jambon-beurre-recipe-picture-900x899.png')
            ]
        ]);

        // Images pour les ingrédients
        DB::table('Images')->insert([
            [
                'id' => 100,
                'url' => ('https://www.bioalaune.com/img/article/10280-saumon.jpg')
            ],
            [
                'id' => 101,
                'url' => ('https://cuisine-test.com/wp-content/uploads/2020/07/P%C3%A2te-%C3%A0-pizza-levure-fra%C3%AEche-scaled.jpg')
            ],
            [
                'id' => 102,
                'url' => ('https://www.cuisineetsentiments.com/images/pates_1.jpg')
            ],
            [
                'id' => 103,
                'url' => ('https://cache.marieclaire.fr/data/photo/w1200_h630_ci/cuisine/4t/bolognaise.jpg')
            ],
            [
                'id' => 104,
                'url' => ('https://img.passeportsante.net/1200x675/2022-11-29/shutterstock-275512886.jpg')
            ],
            [
                'id' => 105,
                'url' => ('https://buenprovecho.hn/wp-content/uploads/2020/09/tomate-1024x680-1.jpg')
            ],
            [
                'id' => 106,
                'url' => ('https://thumbs.dreamstime.com/b/le-blanc-de-poulet-coup%C3%A9-avec-le-couteau-japonais-sur-la-table-76103479.jpg')
            ],
            [
                'id' => 107,
                'url' => 'https://www.papillesetpupilles.fr/wp-content/uploads/2016/03/Riz-basmati-%C2%A9-teleginatania-shutterstock.jpg'
            ],
            [
                'id' => 108,
                'url' => 'https://th.bing.com/th/id/OIP.6RasdM21jcApKkiztyQtUQHaE8?rs=1&pid=ImgDetMain'
            ],
            [
                'id' => 109,
                'url' => 'https://th.bing.com/th/id/OIP.fOSR3IBsy-WTa9eXWXRNsAHaE7?rs=1&pid=ImgDetMain'
            ],
            [
                'id' => 110,
                'url' => 'https://www.charte-origine-montagne.com/wp-content/uploads/2019/04/580321.jpg'
            ],
            [
                'id' => 111,
                'url' => 'https://images.pexels.com/photos/594137/pexels-photo-594137.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
            ],
            [
                'id' => 112,
                'url' => 'https://images.pexels.com/photos/872400/pexels-photo-872400.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
            ],
            [
                'id' => 113,
                'url' => 'https://fridg-front.s3.amazonaws.com/media/products/1583.jpg'
            ],
            [
                'id' => 114,
                'url' => 'https://image.babydestination.com/wp-content/uploads/2017/12/cheese-slice-source-extra-crispy-Copy.png'
            ],
            [
                'id' => 115,
                'url' => 'https://images.pexels.com/photos/1756061/pexels-photo-1756061.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
            ],
            [
                'id' => 116,
                'url' => 'https://img-3.journaldesfemmes.com/PCUC6URcqMRZNca0KCo2qfYu8Q8=/910x607/smart/432c5298182d45818c7a1b140e6b21f1/ccmcms-jdf/10662027.jpg'
            ],
            [
                'id' => 117,
                'url' => 'https://cache.marieclaire.fr/data/photo/w1000_c17/cuisine/4p/photo-de-farine-1234.jpg'
            ],
            [
                'id' => 118,
                'url' => 'https://www.regal.fr/sites/art-de-vivre/files/lait-thinkstockphotos-149151468.jpg'
            ],
            [
                'id' => 119,
                'url' => 'https://img.passeportsante.net/1200x675/2021-05-03/i102021-cornichon.webp'
            ]
        ]);
    }
}
