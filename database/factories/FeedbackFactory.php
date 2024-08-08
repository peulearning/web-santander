<?php
namespace Database\Factories;

use App\Models\Feedback;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeedbackFactory extends Factory
{
    protected $model = Feedback::class;

    public function definition()
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'course_id' => \App\Models\Course::factory(),
            'rating' => $this->faker->numberBetween(1, 5),
            'comment' => $this->faker->text,
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
};
