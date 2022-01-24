<?php

namespace Database\Seeders;

use App\Models\Ppdb;
use Illuminate\Database\Seeder;

class PpdbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ppdb::factory()
            ->count(40)
            ->create();
    }
}
