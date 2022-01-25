<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('generals')
            ->insert([
                'total_graduate' => 0,
                'total_teacher' => 0,
                'total_student' => 0,
            ]);
    }
}
