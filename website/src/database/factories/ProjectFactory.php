<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->words(2, true),
            'short_description' => fake()->words(20, true),
            'image' => 'https://media.istockphoto.com/id/1188445864/photo/closeup-portrait-of-funny-ginger-cat-wearing-sunglasses-isolated-on-light-cyan-copyspace.jpg?s=170667a&w=is&k=20&c=K003CHiz8u-DFpHqNkMMCufhBt0pYzMiiGqfY4AURn4=',
            'description' => fake()->words(60, true),
            'tools' => fake()->words(10, true),
        ];
    }
}
