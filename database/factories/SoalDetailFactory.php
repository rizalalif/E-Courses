<?php

namespace Database\Factories;

use App\Models\Soal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SoalDetail>
 */
class SoalDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'soal_id'=>Soal::all()->random()->id,
            'soal'=>$this->faker->sentence(),
            'jawaban_a'=>$this->faker->sentence(),
            'jawaban_b'=>$this->faker->sentence(),
            'jawaban_c'=>$this->faker->sentence(),
            'jawaban_d'=>$this->faker->sentence(),
            'jawaban_e'=>$this->faker->sentence(),
            'kunci_jawaban'=>$this->faker->randomElement(['a','b','c','d','e']),
            'pembahasan'=>$this->faker->sentence(),
            'created_at'=>now(),
            'updated_at'=>now()
        ];
    }
}
