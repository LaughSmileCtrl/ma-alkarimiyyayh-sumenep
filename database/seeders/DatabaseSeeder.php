<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            ArticleCategorySeeder::class,
            ArticleSeeder::class,
            FileCategorySeeder::class,
            FileSeeder::class,
            GraduateSeeder::class,
            PhotoCategorySeeder::class,
            PhotoSeeder::class,
        ]);
    }
}
