<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KategoriPaket>
 */
class KategoriPaketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $index = 1;
        $categories = [
            '1' => 'kategori 1',
            '2' => 'kategori 2',
            '3' => 'kategori 3',
            '4' => 'kategori 4',
            '5' => 'kategori 5',

        ];
        return [
            'name' => 'Kategori ' . $index++,
            'description' => 'Deskripsi ' . $index       ];
    }
}
