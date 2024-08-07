<?php

namespace Database\Factories;

use App\Models\Paket;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaketDetail>
 */
class PaketDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'paket_id' => Paket::inRandomOrder()->first()->id,
            'paketable_id' => $this->faker->numberBetween(1, 5),
            'status' => $this->faker->randomElement(['soal', 'materi']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
