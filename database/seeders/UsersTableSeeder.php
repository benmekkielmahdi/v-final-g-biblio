<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'=>9,
            'name'=>'Ismail',
            'email'=>'Ismailazrou@gmail.com',
            'role'=> 1,
            'status_id'=> NULL,
            'email_verified_at'=> NULL,
            'password' => Hash::make('Ismail1234') ,   
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'current_team_id' =>  NULL,
            'profile_photo_path' => NULL, 
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
             
        ]);
        DB::table('users')->insert([
            'id'=>8,
            'name'=>'moad',
            'email'=>'moadazrou@gmail.com',
            'role'=> 1,
            'status_id'=> NULL,
            'email_verified_at'=> NULL,
            'password' => Hash::make('moad1234') ,   
            'two_factor_secret' => NULL,
            'two_factor_recovery_codes' => NULL,
            'remember_token' => NULL,
            'current_team_id' =>  NULL,
            'profile_photo_path' => NULL, 
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
             
        ]);
    }
}
