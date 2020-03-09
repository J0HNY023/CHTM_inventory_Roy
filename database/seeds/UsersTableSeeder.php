<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'username' => 'admin',
        	'first_name' => 'Admin',
        	'last_name' => 'Admin',
        	'password' => bcrypt('password')
        ]);
    }
}
