<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PpdbSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ppdb_settings')
            ->insert([
                'open' => '2022-01-01',
                'close' => '2022-01-01',
                'announcement' => '2022-01-01',
                'announcement_url' => null,
                'image' => null,
            ]);
    }
}
