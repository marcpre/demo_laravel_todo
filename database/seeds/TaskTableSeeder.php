<?php

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 25;

        $userIds = DB::table('users')->pluck('id')->toArray();    
        
        for ($i = 0; $i < $limit; $i++) {
            DB::table('tasks')->insert([
                'name' => $faker->sentence(),
                'user_id' => $faker->randomElement($userIds),
            ]);
        }
    }
}
