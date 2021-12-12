<?php

use Illuminate\Database\Seeder;

class BidQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('big_questions')->insert([

            [
            'name' => '東京',
            ],

            [
            'name' => '広島県',
            ],

            [
            'name' => '栃木県',
            ],

            [
            'name' => '京都府',
            ],

            [
            'name' => '北海道',
            ],
        ]);
    }
}
