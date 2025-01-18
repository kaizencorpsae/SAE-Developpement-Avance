<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Mettre en première image une image par défaut avec le sel et le poivre
        $this->call(ImageDataSeeder::class);

        $this->call(PlatDataSeeder::class);

        $this->call(IngredientDataSeeder::class);

        $this->call(PlatIngredientDataSeeder::class);

        $this->call(UserSeeder::class);
    }
}
