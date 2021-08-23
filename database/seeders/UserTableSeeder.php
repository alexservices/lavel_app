<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;


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
            'id'=>'9',
            'name' => 'Alexis Gallardo',
            'email' => 'personal.gallardo@gmail.com',
            'password' => Hash::make('Matheo2021'),
        ]);

    }
}
