<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name(),
            'prenom' => $this->faker->name(),
            'adresse' => $this->faker->name(),
            // 'numTel' => $this->faker->phoneNumber,
            // 'numMobile' => $this->faker->phoneNumber,
            'specialite' => $this->faker->text(10),
            'role' => json_encode(["ROLE_ENTRAINEUR" => true]),
            'date_naissance' => $this->faker->dateTime(),
            'email' => $this->faker->unique()->safeEmail(),
            'cin' => $this->faker->numerify("########"),
            'email_verified_at' => now(),
            'password' => Hash::make('adminadmin'), // hash password
            'remember_token' => Str::random(10),
        ];
    }
}
