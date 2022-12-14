<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::Table('posts')->truncate();
        DB::Table('posts')->insert(
            [
                [
                    'id' => 1,
                    'title' => 'test',
                    'body' => 'testmonial',
                ],
            ]
        );
    }
}
