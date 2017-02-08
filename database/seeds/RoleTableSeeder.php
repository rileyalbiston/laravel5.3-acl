<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'admin',
            'description' => 'The top level of access',
        ]);

         DB::table('roles')->insert([
            'name' => 'user',
            'description' => 'The second level of access',
        ]);
    }
}
