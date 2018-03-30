<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('category')->insert([

            'id' => 1,
            'name' => 'Meetups',
            'description' => 'These are our events'

        ]);
        DB::table('category')->insert([

            'id' => 2,
            'name' => 'Events',
            'description' => 'Tech Related Event'

        ]);
        DB::table('category')->insert([

            'id' => 3,
            'name' => 'Projects',
            'description' => 'Tech Related Projects'

        ]);
    }
}
