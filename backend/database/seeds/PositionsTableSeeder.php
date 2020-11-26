<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // positionテーブルの初期値を定義
        $positon_name1 = '胸部';
        $positon_name2 = '体部';
        $positon_name3 = '頸部 + 胸部';
        $positon_name4 = '頸部 + 体部';

        $position_table_value = [
            ['position_name' => $positon_name1],
            ['position_name' => $positon_name2],
            ['position_name' => $positon_name3],
            ['position_name' => $positon_name4],
        ];

        DB::table('positions')->insert($position_table_value);
    }
}
