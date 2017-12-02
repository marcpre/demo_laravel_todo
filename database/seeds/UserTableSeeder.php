<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);
        
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user2@user.com',
            'password' => bcrypt('user'),
        ]);
    }
}
