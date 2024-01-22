<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Pathaphi Chumueang',
                'email' => 'pathaphi.pk@gmail.com',
                'password' => Hash::make('123456'),
                'address' => 'Satun',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
            ]);
    }
}
