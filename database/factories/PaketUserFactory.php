<?php

namespace Database\Factories;

use App\Models\Paket;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaketUser>
 */
class PaketUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $now = Carbon::now();
        $end = $now->addDays(10);
        return [
            "user_id" => User::inRandomOrder()->first()->id,
            "paket_name" => Paket::inRandomOrder()->first()->name,
            "start_time" => $now,
            "end_time" => $now->addDays(10),
            "day_active_paket" => fake()->numberBetween(1, 9),
        ];
    }
}
