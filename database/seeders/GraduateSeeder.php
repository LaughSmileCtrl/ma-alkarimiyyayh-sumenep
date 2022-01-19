<?php

namespace Database\Seeders;

use App\Models\Graduate;
use Illuminate\Database\Seeder;

class GraduateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Graduate::factory()
            ->count(100)
            ->create();
    }
}
