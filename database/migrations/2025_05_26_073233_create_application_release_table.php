<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationReleaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_release', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('applications_id');
            // $table->bigInteger('category_id')->nullable();

            $table->integer('time_from_sec')->nullable();
            $table->integer('time_to_sec')->nullable();
            $table->integer('duration_sec')->nullable();
            $table->string( 'name', 255 );
            $table->string( 'notes', 255 );
            $table->text('file_names_version_list')->nullable();



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
        Schema::dropIfExists('application_release');
    }
}
