<?php

namespace Database\Factories;

use App\Models\Materi;
use App\Models\MateriDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MateriDetail>
 */
class MateriDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'materi_id' => Materi::all()->random()->id,
            'materi' => $this->faker->sentence(),
            'page_number' => $this->faker->numberBetween(1, 100),
            'status' => $this->faker->randomElement(['finish','draft']),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
