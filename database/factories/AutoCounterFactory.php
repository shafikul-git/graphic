<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AutoCounter>
 */
class AutoCounterFactory extends Factory
{
    protected static $counterKey = 1;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
         'counter_key' => 'counter_' . self::$counterKey++,
         'total_duration' => 6,
         'total_count' => 120,
         'current_count' => 0,
         'before' => '',
         'after' => '+',
         'action' => 'increment',
        ];
    }
}
