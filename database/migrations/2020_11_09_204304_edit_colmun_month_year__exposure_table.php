<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditColmunMonthYearExposureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exposures', function (Blueprint $table) {
            $table->unsignedInteger('month')->length(2)->charset(null)->change();
            $table->unsignedInteger('year')->length(4)->charset(null)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exposures', function (Blueprint $table) {
            //
        });
    }
}
