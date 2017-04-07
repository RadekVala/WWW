<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesTableSeeder::class);
        $this->call(ContentsTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(ContentHasTagTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
