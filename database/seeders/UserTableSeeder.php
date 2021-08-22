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
            'name' => 'Andre Gallardo',
            'email' => 'raymundo.it.hd@gmail.com',
            'password' => Hash::make('abc123**'),
        ]);

    }
}
