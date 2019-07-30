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
        	'name' => str_random(10),
        	'email' => str_random(10) . '@gmail.com',
        	'password' => bcrypt('123'),
        	'role_id' => 2,
        	'is_active' => 0,
        	'updated_at' => Carbon::now(),
        	'created_at' => Carbon::now(),

        ]);
    }
}
