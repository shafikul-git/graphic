<?php

namespace Database\Factories\Frontend;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\frontend\HeroSlider>
 */
class HeroSliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slider_key' => fake()->unique()->uuid(),
            'title' => fake()->title(),
            'description' => fake()->text(),
            'status' => true,
            'image' => fake()->imageUrl(1600, 60, 'girl', true),
            'link_one' => fake()->url(),
            'link_two' => fake()->url(),
        ];
    }
}
