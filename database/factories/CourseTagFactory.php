<?php

namespace Database\Factories;

use App\Models\CourseTag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CoursetagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = CourseTag::class;
    public function definition()
    {

        return [
            'course_id' => fake()->numberBetween(1, 65),
            'tag_id' => fake()->numberBetween(1, 17),
        ];

    }
}
