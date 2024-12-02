<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Plat;
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

        Image::create([
            'id' => 1,
            'url' => ('https://i.pinimg.com/736x/a8/3a/f8/a83af885b290905d426dc04c414fa945.jpg')
        ]);

        Plat::create([
            'nom' => 'Pizza saumon',
            'description' => 'Pizza saumon avec du saumon',
            'image_id' => 1
        ]);
    }
}
