<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExposuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exposures', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->bigInteger('position_id')->unsigned();
            $table->foreign('position_id')->references('p_id')->on('positions');
            $table->string('record_date', 6);
            $table->decimal('dose_neck', 5, 2)->nullable();
            $table->decimal('dose_body', 5, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exposures');
    }
}
