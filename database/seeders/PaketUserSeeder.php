<?php

namespace Database\Seeders;

use App\Models\PaketUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaketUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaketUser::factory()->count(10)->create();
    }
}
