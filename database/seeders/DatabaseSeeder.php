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
        $this->call([
            UserSeeder::class,
            CategoriesSeeder::class,
            PortfolioSeeder::class,
            SkillSeeder::class,
            TaglineSeeder::class,
            EducationSeeder::class,
            ConfigSeeder::class,
            KnowledgeSeeder::class,
        ]);
    }
}
