<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([

            [
            'name' => '東京の難読地名クイズ',
            ],

            [
            'name' => '広島県の難読地名クイズ',
            ],
        ]);
    }
}
