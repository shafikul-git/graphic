<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BeforeAfter>
 */
class BeforeAfterFactory extends Factory
{
    protected static $myKey;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'unique_key' => 'before_after_' . self::$myKey++,
            'first_image' => fake()->imageUrl(1024, 600, 'girl', true),
            'second_image' => fake()->imageUrl(1024, 600, 'girl', true),
        ];
    }
}
