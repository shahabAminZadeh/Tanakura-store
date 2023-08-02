<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;


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
                //adminT
                [
                    'name' => 'adminT',
                    'email' => 'Admin@gmail.com',
                    'password' => Hash::make('111'),
                    'status' =>'active',
                    'role' =>'adminT',

                ],
                //vendor
                [
                    'name' => 'vendor',
                    'email' => 'Vendor@gmail.com',
                    'password' => Hash::make('111'),
                    'status' =>'active',
                    'role' =>'vendor',
                ],
                //user
                [
                    'name' => 'user',
                    'email' => 'user@gmail.com',
                    'password' => Hash::make('111'),
                    'status' =>'active',
                    'role' =>'user',
                ]
        ]
        );
    }
}
