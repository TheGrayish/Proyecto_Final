<?php

namespace Database\Seeders;

use App\Models\Gray;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GraySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gray::factory()->count(20)->create();

    }

}
