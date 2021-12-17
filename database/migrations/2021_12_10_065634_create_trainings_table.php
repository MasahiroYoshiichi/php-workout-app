<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('video_url');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('training_point_id');
            $table->string('training_name');
            $table->timestamps();
            
            $table->foreign('course_id')
                  ->references('id')
                  ->on('courses')
                  ->onUpdate('CASCADE')
                  ->onDelete('CASCADE');
                  
            $table->foreign('training_point_id')
                  ->references('id')
                  ->on('training_points')
                  ->onUpdate('CASCADE')
                  ->onDelete('CASCADE');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainings');
    }
}
