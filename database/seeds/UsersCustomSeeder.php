<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersCustomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
        	'name' => 'Admin',
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('admin'),
        	'role_id' => 1,
        	'is_active' => 1,
        	'updated_at' => Carbon::now(),
        	'created_at' => Carbon::now(),

        ]);
    }
}
