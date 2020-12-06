<?php

use App\User;
use App\Exposure;
use Illuminate\Database\Seeder;

class ExposuresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(User::class)->create();

        $exposures = $user->exposures()->createMany(
            factory(App\Exposure::class, 20)->make()->toArray()
        );
    }
}
