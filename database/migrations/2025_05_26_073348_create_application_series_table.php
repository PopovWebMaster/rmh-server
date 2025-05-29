<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_series', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('applications_id');
            $table->integer('time_from_sec')->nullable();
            $table->integer('time_to_sec')->nullable();
            $table->integer('duration_sec')->nullable();
            $table->integer('serial_num');
            $table->string( 'notes', 255 );
            $table->text('file_names_version_list')->nullable();

            $table->text('description')->nullable();
            $table->string( 'correct_file_name', 255 )->nullable();



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
        Schema::dropIfExists('application_series');
    }
}
