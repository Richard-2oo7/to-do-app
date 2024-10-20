<?php

namespace Database\Factories;

use App\Models\Panel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Testing\Fakes\Fake;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'panel_id' => Panel::factory(),
            'title' => fake()->word(),
            'completed' => 0,
            'description' => fake()->text(),
        ];
    }
}
