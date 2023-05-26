<?php

namespace Database\Factories;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompetitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "label" => $this->faker->text(10),
            "description" => $this->faker->text(150),
            "startDate" => $this->faker->date('Y_m_d'),
            "endDate" => $this->faker->date('Y_m_d'),
            "activity_id" => Activity::all()->random()->id,
        ];
    }
}
