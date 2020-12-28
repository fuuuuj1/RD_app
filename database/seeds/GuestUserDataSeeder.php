<?php

use App\User;
use App\Exposure;
use App\Job;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GuestUserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $job_id = \App\Job::where('j_id', '1')->value('j_id');
        $guest_user_value = [
        'id' => '99',
        'lastname' => 'ゲスト',
        'firstname' => 'ユーザー',
        'gender' => 'male',
        'age' => 32,
        'job_id' => $job_id,
        'email' => 'guest@test.jp',
        'email_verified_at' => now(),
        'password' => Hash::make('testtest'),
        'remember_token' => Str::random(10),
        ];

        DB::table('users')->insert($guest_user_value);
    }
}
