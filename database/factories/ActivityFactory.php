<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $images = [
            "images/dmccLLbnvmVyM6VAgl9L3EQvlueH2g7d5c8wDgUx.jpg",
            "images/3ajjrehF9YOwIpx8F958LPgeyvTXXSNVcd7IjXv6.jpg"
        ];
        return [
            "label" => $this->faker->text(10),
            "description" => $this->faker->text(150),
            "prix" => 12.3,
            "image" => $this->faker->randomElement($images),
            "category_id" =>Category::all()->random()->id,
        ];
    }
}
