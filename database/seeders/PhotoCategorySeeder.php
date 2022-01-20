<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photo_categories')
            ->insert([
                ['title' => 'gallery'],
                ['title' => 'achivement'],
            ]);
    }
}
