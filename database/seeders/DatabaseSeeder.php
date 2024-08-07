<?php

namespace Database\Seeders;

use App\Models\KategoriPaket;
use App\Models\Materi;
use App\Models\Paket;
use App\Models\PaketDetail;
use App\Models\Soal;
use App\Models\User;
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
        Schema::disableForeignKeyConstraints();
        User::truncate();
        KategoriPaket::truncate();
        Paket::truncate();
        PaketDetail::truncate();
        Materi::truncate();
        Soal::truncate();
        Schema::enableForeignKeyConstraints();

        $this->call(
            [
                KategoriPaketSeeder::class,
                PaketSeeder::class,
                PaketDetailSeeder::class,
                MateriSeeder::class,
                SoalSeeder::class
            ]
        );
    }
}
