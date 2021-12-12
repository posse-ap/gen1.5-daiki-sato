<?php

use Illuminate\Database\Seeder;

class ChoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('choices')->insert([

            // 東京：1
            [
            'question_id' => 1,
            'name' => 'たかなわ',
            'valid' => 1,
            ],
            
            [
            'question_id' => 1,
            'name' => 'たかわ',
            'valid' => 0,
            ],
            
            [
            'question_id' => 1,
            'name' => 'こうわ',
            'valid' => 0,
            ],

            // 東京：2
            [
            'question_id' => 2,
            'name' => 'かめいど',
            'valid' => 1,
            ],
            
            [
            'question_id' => 2,
            'name' => 'かめと',
            'valid' => 0,
            ],
            
            [
            'question_id' => 2,
            'name' => 'かめど',
            'valid' => 0,
            ],

            // 広島：1
            [
            'question_id' => 11,
            'name' => '広島焼き',
            'valid' => 1,
            ],
            
            [
            'question_id' => 11,
            'name' => 'お好み焼き',
            'valid' => 0,
            ],
            
            [
            'question_id' => 11,
            'name' => '広島市',
            'valid' => 0,
            ],
            

            // 栃木：1
            [
            'question_id' => 21,
            'name' => '下野市',
            'valid' => 1,
            ],
            
            [
            'question_id' => 21,
            'name' => '小山',
            'valid' => 0,
            ],
            
            [
            'question_id' => 21,
            'name' => '宇都宮',
            'valid' => 0,
            ],
            

            // 京都：1
            [
            'question_id' => 31,
            'name' => '金閣寺',
            'valid' => 1,
            ],
            
            [
            'question_id' => 31,
            'name' => '銀閣寺',
            'valid' => 0,
            ],
            
            [
            'question_id' => 31,
            'name' => '清水寺',
            'valid' => 0,
            ],
            
            // 京都：2
            [
            'question_id' => 32,
            'name' => '猫',
            'valid' => 1,
            ],
            
            [
            'question_id' => 32,
            'name' => '犬',
            'valid' => 0,
            ],
            
            [
            'question_id' => 32,
            'name' => '清水の舞台から飛び降りる',
            'valid' => 0,
            ],
            
            
            // 北海道：1
            [
            'question_id' => 33,
            'name' => '美瑛',
            'valid' => 1,
            ],
            
            [
            'question_id' => 33,
            'name' => 'スノボ',
            'valid' => 0,
            ],
            
            [
            'question_id' => 33,
            'name' => '札幌',
            'valid' => 0,
            ],

            // 北海道：2
            [
            'question_id' => 34,
            'name' => '富良野',
            'valid' => 1,
            ],
            
            [
            'question_id' => 34,
            'name' => 'バター工房',
            'valid' => 0,
            ],
            
            [
            'question_id' => 34,
            'name' => '雪',
            'valid' => 0,
            ],
            

        ]);
    }
}
