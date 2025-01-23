<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plat>
 */
class PlatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->randomElement(["Cheeseburger","Pâtes au beurre","Butterchicken","Tarte"]),
            'description' => $this->faker->text(),
            'image_id' =>Image::factory(),
            'preparation' => $this->faker->text(),
        ];
    }
}
