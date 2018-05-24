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
//         $this->call(UsersTableSeeder::class);
         $this->call(SchoolsTableSeeder::class);
         $this->call(InterestsTableSeeder::class);
         $this->call(CategoryTableSeeder::class);
         $this->call(RolesTableSeeder::class);
    }
}
