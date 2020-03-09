<?php

use App\User;
use App\Equipment;
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


        Equipment::create([
            'serial_number' => '2039',
            'brand' => 'lg',
            'date_bought' => '2001-05-05',
            'equipment_category_id' => '1'
        ]);
        
    }
}
