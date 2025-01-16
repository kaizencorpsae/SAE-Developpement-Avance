<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Ingredient;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ingredient>
 */
class IngredientFactory extends Factory
{
    protected $model = Ingredient::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $idimage = DB::table('images')->max('id');
        return [
            'nom' => $this->faker->randomElement([
                'Tomate', 'Poulet', 'Salade', 'Poivron', 'Carotte'
            ]),
            'image_id' => Image::factory(),
        ];
    }
}
