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
                'url' => ('https://i.pinimg.com/736x/4e/76/52/4e76529f0d4b0ce2a28ea1899a50f755.jpg')
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
                'url' => ('https://api.toutlevin.com/images/5246262ff9b387d2dae7e4f1579af965.jpg?width=1200&quality=75')
            ],
            [
                'id' => 8,
                'url' => ('https://images.services.kitchenstories.io/FQPoYXqopSF8apn6ZCB6uEaXVyk=/3840x0/filters:quality(85)/images.kitchenstories.io/wagtailOriginalImages/R3072-final-photo-2.jpg')
            ]
        ]);
    }
}
