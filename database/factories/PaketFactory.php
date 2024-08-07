<?php

namespace Database\Factories;

use App\Models\KategoriPaket;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paket>
 */
class PaketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = KategoriPaket::all();
        return [
            "thumbnail" => 'up.png',
            "kategori_id" => $categories->random()->id,
            "name" => fake()->word(),
            "description" => fake()->sentence(20),
            "status" => 'active',
            "day_active_paket" => fake()->numberBetween(1, 5),
            "paket_type" => 'free',
            "price" => fake()->randomFloat(3),
            "discount" => fake()->randomFloat(2),
        ];
    }
}
