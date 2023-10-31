<?php

namespace Database\Factories;
use App\Models\video;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VideoFactory extends Factory
{
    protected $model = Video::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'url' =>$this->faker->imageUrl(446, 240, 'animals', true), 
            'length' => $this->faker->randomNumber(3),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->text()
        ];
    }
}
