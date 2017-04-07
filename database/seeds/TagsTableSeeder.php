<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'Webdesign',
        ]);

        DB::table('tags')->insert([
            'name' => 'HTML',
        ]);

        DB::table('tags')->insert([
            'name' => 'CSS',
        ]);

        DB::table('tags')->insert([
            'name' => 'JavaScript',
        ]);

        DB::table('tags')->insert([
            'name' => 'PHP',
        ]);

    }
}
