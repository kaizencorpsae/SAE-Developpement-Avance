<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'image_id' => 1,
        ];
    }
}
