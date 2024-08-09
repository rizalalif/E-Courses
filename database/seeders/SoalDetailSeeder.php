<?php

namespace Database\Seeders;

use App\Models\SoalDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SoalDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SoalDetail::factory(50)->create();
    }
}
