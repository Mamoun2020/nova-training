<?php

namespace Database\Seeders;

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
        DB::Table('users')->truncate();
        DB::Table('users')->insert(
            [
                [
                    'id' => 1,
                    'name' => 'admin',
                    'email' => 'admin@example.com',
                    'password' => '123456',
                ],
            ]
        );
    }
}
