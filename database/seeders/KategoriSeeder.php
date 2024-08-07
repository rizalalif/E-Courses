<?php

namespace Database\Seeders;

use App\Models\KategoriPaket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KategoriPaket::factory()->count(5)->create();
        // $categories = [
        //     [
        //         'name' => 'Pemrograman',
        //         'image' => 'alatmandi.jpg'
        //     ],
        //     [
        //         'name' => 'Pemrograman',
        //         'image' => 'alatmandi.jpg'
        //     ],
        // ];
    }
}
