<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
        	["username" => "luisxxor","password" => hash("sha256","1234")]
        );

        DB::table('users')->insert(
        	["username" => "andre","password" => hash("sha256","1234")]
        );
    }
}
