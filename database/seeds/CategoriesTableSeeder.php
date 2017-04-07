<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'ROOT',
            'description' => 'The Root category',
            'seo_name' => 'root',
            'visible' => true,
        ]);

        DB::table('categories')->insert([
            'name' => 'News',
            'description' => 'Everything actual...',
            'seo_name' => 'news',
            'visible' => true,
            'category_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'Webdesign',
            'description' => 'All about World Wide Web.',
            'seo_name' => 'webdesign',
            'visible' => true,
            'category_id' => 1
        ]);

        DB::table('categories')->insert([
            'name' => 'Client Side',
            'description' => 'Client side technologies.',
            'seo_name' => 'client-side',
            'visible' => true,
            'category_id' => 3
        ]);

        DB::table('categories')->insert([
            'name' => 'Server Side',
            'description' => 'Server side technologies.',
            'seo_name' => 'server-side',
            'visible' => true,
            'category_id' => 3
        ]);
    }
}
