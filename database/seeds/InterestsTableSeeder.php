<?php

use Illuminate\Database\Seeder;
use App\Models\Interest;

class InterestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        //$faker = Faker\Factory::create();
        $interests = ['Programming', 'UX Design', 'Networking', 'AI', 'Security',
            'Data Analytics', 'Machine Learning'];
        for($i = 0; $i  < sizeof($interests);$i++){
            $interest = new Interest;
            $interest->name = $interests[$i];
            $interest->description = 'Computing Field';
            $interest->save();
        }
    }
}
