<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\postmodel>
 */
class postmodelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word(80),
        'postby' => fake()->name(),
        'file' => fake()->imageUrl(640, 400),
        'category' => fake()->name(),
        'body' => fake()->paragraph(300),
        'counts' => Str::random(5),
        'slug' => fake()->name(),
        ];
    }
}
