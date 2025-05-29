<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationSeriesScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_series_schedule', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('application_series_id');
            $table->bigInteger('grid_event_id');
            $table->integer('day_sec');
            $table->integer('time_sec');
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
        Schema::dropIfExists('application_series_schedule');
    }
}
