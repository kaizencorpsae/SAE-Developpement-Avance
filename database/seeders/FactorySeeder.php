<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Ingredient;
use App\Models\Plat;
use App\Models\Plat_Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FactorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ingredients = Ingredient::factory()->count(5)->create();

        $this->command->info("Ingredients :");
        foreach ($ingredients as $ingredient) {
            $this->command->info($ingredient->id." - ".$ingredient->nom." - ".$ingredient->image_id);
        }

        $plats = Plat::factory()->count(5)->create();

        $this->command->info("Plats :");
        foreach ($plats as $plat) {
            $this->command->info($plat->id." - ".$plat->nom." - ".$plat->description." - ".$plat->image_id);
        }

        $images = Image::factory()->count(5)->create();

        $this->command->info("Images :");
        foreach ($images as $image) {
            $this->command->info($image->id." - ".$image->url);
        }

        $plat_ingredient = Plat::factory()->hasAttached(Ingredient::factory(random_int(2,5)))->create();
        $ingredientIds = $plat_ingredient->ingredients->pluck('id')->toArray();

        $this->command->info("Plat_Ingredients :");
        foreach ($ingredientIds as $ingredientId) {
            $this->command->info($plat_ingredient->id." - ".$ingredientId);
        }

    }
}
