<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'administrator',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);

        DB::table('roles')->insert([
            'name' => 'subscriber',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);

        DB::table('roles')->insert([
            'name' => 'author',
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now(),
        ]);

    }
}
