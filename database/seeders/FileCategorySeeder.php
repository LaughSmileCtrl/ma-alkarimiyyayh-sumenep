<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FileCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('file_categories')
            ->insert([
                ['title' => 'certificate'],
                ['title' => 'mail-in'],
                ['title' => 'mail-out'],
            ]);
    }
}
