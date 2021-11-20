<?php

use Illuminate\Database\Seeder;

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
            [
            'name' => '佐藤大暉',
            'email' => 'test@com',
            'password' => 'password',
            'belongs' => '大学',
            ],
        ]);
    }
}
