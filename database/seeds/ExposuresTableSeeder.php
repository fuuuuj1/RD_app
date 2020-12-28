<?php

use App\User;
use App\Exposure;
use Illuminate\Database\Seeder;
// use Faker\Generator as Faker;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ExposuresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 登録パラメータの設定
        $faker = Faker::create('ja_JP');

        $position_id = \App\Position::where('p_id', '3')->value('j_id');
        $user_id = 99;
        $comments = array('レントゲン勤務が多かった', 'CT業務中心', 'OPE室勤務中心', 'Angio業務多数', '透視業務多数');

        for ($month = 1, $year = 2010; $month <= 12; $month++) {

            $comment_key = array_rand($comments);
            // 線量データの登録
            $guest_exposure_data1 = [
                'year' => $year,
                'month' => $month,
                'dose_body' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10),
                'dose_neck' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 5),
                'comment' => $comments[$comment_key],
                'position_id' => $position_id,
                'user_id' => $user_id,
            ];
            DB::table('exposures')->insert($guest_exposure_data1);
        };
        for ($month = 1, $year = 2011; $month <= 12; $month++) {
            // 線量データの登録
            $comment_key = array_rand($comments);
            $guest_exposure_data2 = [
                'year' => $year,
                'month' => $month,
                'dose_body' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10),
                'dose_neck' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 5),
                'comment' => $comments[$comment_key],
                'position_id' => $position_id,
                'user_id' => $user_id,
            ];
            DB::table('exposures')->insert($guest_exposure_data2);
        };
        for ($month = 1, $year = 2012; $month <= 12; $month++) {
            // 線量データの登録
            $comment_key = array_rand($comments);
            $guest_exposure_data3 = [
                'year' => $year,
                'month' => $month,
                'dose_body' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10),
                'dose_neck' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 5),
                'comment' => $comments[$comment_key],
                'position_id' => $position_id,
                'user_id' => $user_id,
            ];
            DB::table('exposures')->insert($guest_exposure_data3);
        };
        for ($month = 1, $year = 2013; $month <= 12; $month++) {
            // 線量データの登録
            $comment_key = array_rand($comments);
            $guest_exposure_data4 = [
                'year' => $year,
                'month' => $month,
                'dose_body' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10),
                'dose_neck' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 5),
                'comment' => $comments[$comment_key],
                'position_id' => $position_id,
                'user_id' => $user_id,
            ];
            DB::table('exposures')->insert($guest_exposure_data4);
        };
        for ($month = 1, $year = 2014; $month <= 12; $month++) {
            // 線量データの登録
            $comment_key = array_rand($comments);
            $guest_exposure_data5 = [
                'year' => $year,
                'month' => $month,
                'dose_body' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10),
                'dose_neck' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 5),
                'comment' => $comments[$comment_key],
                'position_id' => $position_id,
                'user_id' => $user_id,
            ];
            DB::table('exposures')->insert($guest_exposure_data5);
        };
        for ($month = 1, $year = 2015; $month <= 12; $month++) {
            // 線量データの登録
            $comment_key = array_rand($comments);
            $guest_exposure_data6 = [
                'year' => $year,
                'month' => $month,
                'dose_body' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10),
                'dose_neck' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 5),
                'comment' => $comments[$comment_key],
                'position_id' => $position_id,
                'user_id' => $user_id,
            ];
            DB::table('exposures')->insert($guest_exposure_data6);
        };
        for ($month = 1, $year = 2016; $month <= 12; $month++) {
            // 線量データの登録
            $comment_key = array_rand($comments);
            $guest_exposure_data7 = [
                'year' => $year,
                'month' => $month,
                'dose_body' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10),
                'dose_neck' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 5),
                'comment' => $comments[$comment_key],
                'position_id' => $position_id,
                'user_id' => $user_id,
            ];
            DB::table('exposures')->insert($guest_exposure_data7);
        };
        for ($month = 1, $year = 2017; $month <= 12; $month++) {
            // 線量データの登録
            $comment_key = array_rand($comments);
            $guest_exposure_data8 = [
                'year' => $year,
                'month' => $month,
                'dose_body' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10),
                'dose_neck' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 5),
                'comment' => $comments[$comment_key],
                'position_id' => $position_id,
                'user_id' => $user_id,
            ];
            DB::table('exposures')->insert($guest_exposure_data8);
        };
        for ($month = 1, $year = 2018; $month <= 12; $month++) {
            // 線量データの登録
            $comment_key = array_rand($comments);
            $guest_exposure_data9 = [
                'year' => $year,
                'month' => $month,
                'dose_body' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10),
                'dose_neck' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 5),
                'comment' => $comments[$comment_key],
                'position_id' => $position_id,
                'user_id' => $user_id,
            ];
            DB::table('exposures')->insert($guest_exposure_data9);
        };
        for ($month = 1, $year = 2019; $month <= 12; $month++) {
            // 線量データの登録
            $comment_key = array_rand($comments);
            $guest_exposure_data10 = [
                'year' => $year,
                'month' => $month,
                'dose_body' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10),
                'dose_neck' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 5),
                'comment' => $comments[$comment_key],
                'position_id' => $position_id,
                'user_id' => $user_id,
            ];
            DB::table('exposures')->insert($guest_exposure_data10);
        };
        for ($month = 1, $year = 2020; $month <= 12; $month++) {
            // 線量データの登録
            $comment_key = array_rand($comments);
            $guest_exposure_data11 = [
                'year' => $year,
                'month' => $month,
                'dose_body' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10),
                'dose_neck' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 5),
                'comment' => $comments[$comment_key],
                'position_id' => $position_id,
                'user_id' => $user_id,
            ];
            DB::table('exposures')->insert($guest_exposure_data11);
        };
    }
}
