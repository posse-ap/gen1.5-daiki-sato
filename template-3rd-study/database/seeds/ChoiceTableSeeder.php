<?php

use Illuminate\Database\Seeder;

class ChoiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('choices')->insert([

            ['question_id' => '1',
            'name' => 'たかなわ',
            'valid' => '1',
            ],

            ['question_id' => '1',
            'name' => 'たかわ',
            'valid' => '0',
            ],

            ['question_id' => '1',
            'name' => 'こうわ',
            'valid' => '0',
            ],

            ['question_id' => '2',
            'name' => 'むこうひら',
            'valid' => '0',
            ],

            ['question_id' => '2',
            'name' => 'むきひら',
            'valid' => '0',
            ],

            ['question_id' => '2',
            'name' => 'むかいなだ',
            'valid' => '1',
            ],
        ]);
    }
}
