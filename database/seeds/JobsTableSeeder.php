<?php

use Illuminate\Database\Seeder;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // jobsテーブルの初期値を定義
        $job_name_1 = '診療放射線技師';
        $job_name_2 = '看護師';
        $job_name_3 = '臨床検査技師';
        $job_name_4 = '臨床工学技士';
        $job_name_5 = '医師';
        $job_name_6 = '理学療法士';
        $job_name_7 = 'その他';

        // jobsテーブルに格納するために配列形式に
        $job_table_value = [
            ['job_name' => $job_name_1],
            ['job_name' => $job_name_2],
            ['job_name' => $job_name_3],
            ['job_name' => $job_name_4],
            ['job_name' => $job_name_5],
            ['job_name' => $job_name_6],
            ['job_name' => $job_name_7],
        ];

        DB::table('jobs')->insert($job_table_value);
    }
}
