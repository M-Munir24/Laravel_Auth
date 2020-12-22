<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//use Illuminate\Support\Facedes\DB;
//use Illuminate\Support\Facedes\Hash;
//use Illuminate\Support\Str;
use DB;
use Hash;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email'=>'admin@mail.com',
            'password'=>Hash::make('1234'),
            'address'=>'Jalan',
            'phone_number'=>'08153951868',
            'role'=>'admin'
        ]);
    }
}
