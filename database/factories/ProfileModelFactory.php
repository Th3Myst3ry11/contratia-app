<?php

namespace Database\Factories;

use App\Models\ProfileModel;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProfileModel>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = ProfileModel::class;
    public function definition()
    {
        return [
            
            'firstname' => fake()->name(),
            'lastname' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
          'user_fk' => '1',
           'description' => fake()->text(),
           'title' => fake()->title(),
           'city' => fake()->city(),
           'country' => fake()->country(),
           'rate' => fake()->randomNumber(),
           'skill' => Str::random(),
        ];
    }
        
    }

