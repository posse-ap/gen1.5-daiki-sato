<?php

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([

            // 東京
            [
                'big_question_id' => 1,
                'image' => '/tokyo/1.png',
            ],

            [
                'big_question_id' => 1,
                'image' => '/tokyo/2.png',
            ],

            [
                'big_question_id' => 1,
                'image' => '/tokyo/3.png',
            ],

            [
                'big_question_id' => 1,
                'image' => '/tokyo/4.png',
            ],

            [
                'big_question_id' => 1,
                'image' => '/tokyo/5.png',
            ],

            [
                'big_question_id' => 1,
                'image' => '/tokyo/6.png',
            ],

            [
                'big_question_id' => 1,
                'image' => '/tokyo/7.png',
            ],

            [
                'big_question_id' => 1,
                'image' => '/tokyo/8.png',
            ],

            [
                'big_question_id' => 1,
                'image' => '/tokyo/9.png',
            ],

            [
                'big_question_id' => 1,
                'image' => '/tokyo/10.png',
            ],


            // 広島
            [
                'big_question_id' => 2,
                'image' => '/hiroshima/1.png',
            ],

            [
                'big_question_id' => 2,
                'image' => '/hiroshima/2.png',
            ],

            [
                'big_question_id' => 2,
                'image' => '/hiroshima/3.png',
            ],

            [
                'big_question_id' => 2,
                'image' => '/hiroshima/4.png',
            ],

            [
                'big_question_id' => 2,
                'image' => '/hiroshima/5.png',
            ],

            [
                'big_question_id' => 2,
                'image' => '/hiroshima/6.png',
            ],

            [
                'big_question_id' => 2,
                'image' => '/hiroshima/7.png',
            ],

            [
                'big_question_id' => 2,
                'image' => '/hiroshima/8.png',
            ],

            [
                'big_question_id' => 2,
                'image' => '/hiroshima/9.png',
            ],

            [
                'big_question_id' => 2,
                'image' => '/hiroshima/10.png',
            ],


            // 栃木
            [
                'big_question_id' => 3,
                'image' => '/tochigi/1.png',
            ],

            [
                'big_question_id' => 3,
                'image' => '/tochigi/2.png',
            ],

            [
                'big_question_id' => 3,
                'image' => '/tochigi/3.png',
            ],

            [
                'big_question_id' => 3,
                'image' => '/tochigi/4.png',
            ],

            [
                'big_question_id' => 3,
                'image' => '/tochigi/5.png',
            ],

            [
                'big_question_id' => 3,
                'image' => '/tochigi/6.png',
            ],

            [
                'big_question_id' => 3,
                'image' => '/tochigi/7.png',
            ],

            [
                'big_question_id' => 3,
                'image' => '/tochigi/8.png',
            ],

            [
                'big_question_id' => 3,
                'image' => '/tochigi/9.png',
            ],

            [
                'big_question_id' => 3,
                'image' => '/tochigi/10.png',
            ],


            // 京都府
            [
                'big_question_id' => 4,
                'image' => '/kyoto/1.png',
            ],

            [
                'big_question_id' => 4,
                'image' => '/kyoto/2.png',
            ],


            // 北海道
            [
                'big_question_id' => 5,
                'image' => '/hokkaido/1.png',
            ],

            [
                'big_question_id' => 5,
                'image' => '/hokkaido/2.png',
            ],

        ]);
    }
}
