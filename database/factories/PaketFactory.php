<?php

namespace Database\Factories;

use App\Models\KategoriPaket;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaketFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kategori_id'=>KategoriPaket::inRandomOrder()->first()->id,
            'thumbnail'=>'https://picsum.photos/200/300',
            'name'=>$this->faker->name,
            'description'=>$this->faker->text,
            'status'=>$this->faker->randomElement(['active', 'inactive']),
            'day_active_paket'=>$this->faker->numberBetween(1,30),
            'paket_type'=>$this->faker->randomElement(['free', 'purchase']),
            'price'=>$this->faker->numberBetween(10000,10000000),
            'discount'=>$this->faker->numberBetween(1,100),
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
    }
}
