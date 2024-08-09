<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
class KategoriPaketFactory extends Factory
{
    public function definition(): array
    {
        static $index = 1;
        return [
            'name' => 'Kategori ' . $index++,
            'description' => 'Deskripsi ' . $index       ];
    }
}
