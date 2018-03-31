<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
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
        for($i = 1; $i <= $count; $i++){
            $members = new User;
            $members->username = $faker->userName;
            $members->first_name = $faker->firstName;
            $members->last_name = $faker->lastName;
            $members->email = $faker->email;
            $members->password = $faker->password;
            $members->state = 'Lagos State';
            $members->skills = 'Coding';
            $members->short_bio = 'I prefer coding to typing';
            $members->medium_username = $faker->userName;
            $members->twitter_username = $faker->userName;
            $members->github_username = $faker->userName;
            $members->slack_username = $faker->userName;
            $members->school_id = $i;
            $members->active = rand(0,1);
            $members->save();
        }

    }
}
