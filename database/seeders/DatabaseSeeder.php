<?php

namespace Database\Seeders;

use App\Models\KategoriPaket;
use App\Models\Materi;
use App\Models\MateriDetail;
use App\Models\Paket;
use App\Models\User;
use Database\Factories\KategoriFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        $this->call(
            [
                UserSeeder::class,
                KategoriPaketSeeder::class,
                PaketSeeder::class,
                PaketUserSeeder::class,
                MateriSeeder::class,
                SoalSeeder::class,
                SoalDetailSeeder::class,
                MateriDetailSeeder::class,


            ]
        );
    }
}
