<?php

use App\User;
use App\Role;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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
            'name' => 'Joe',
            'email' => 'joe@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'Jane',
            'email' => 'jane@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
