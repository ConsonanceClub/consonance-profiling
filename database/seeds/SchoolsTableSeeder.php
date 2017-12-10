<?php

use Illuminate\Database\Seeder;
use App\Models\School;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();

        $count = 1000;

        for ($i = 1; $i <= $count;$i++){
            $school = new School;
            $school->name = $faker->lastName . ' University';
            $school->short_code = $i;
            $school->save();
        }

    }
}
