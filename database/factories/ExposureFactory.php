<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Exposure;
use App\User;
use App\Position;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

use Faker\Generator as Faker;

$factory->define(Exposure::class, function (Faker $faker) {

    // $user_id = factory(App\User::class)->create()->id;
    // $position_id = App\Position::inRandomOrder()->value('p_id');

    return [
        'year' => $faker->numberBetween($min = 2010, $max = 2020),
        'month' => $faker->month,
        'dose_body' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 10),
        'dose_neck' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 5),
        'position_id' => 3,
        'comment' => $faker->realText($maxNbChars = 20, $indexSize = 2),
        'user_id' => 99,
    ];
});
