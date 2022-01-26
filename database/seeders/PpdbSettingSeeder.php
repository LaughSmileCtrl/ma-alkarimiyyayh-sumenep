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
                'open' => null,
                'close' => null,
                'announcement' => null,
                'announcement_url' => null,
                'image' => null,
            ]);
    }
}
