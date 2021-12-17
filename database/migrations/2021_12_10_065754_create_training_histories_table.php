<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('training_id');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('training_point_id');
            $table->integer('user_weight');
            $table->integer('user_fat');
            $table->timestamps();
            
             $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onUpdate('CASCADE')
                  ->onDelete('CASCADE');
            
            $table->foreign('course_id')
                  ->references('id')
                  ->on('courses')
                  ->onUpdate('CASCADE')
                  ->onDelete('CASCADE');
            
            $table->foreign('training_id')
                  ->references('id')
                  ->on('trainings')
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
        Schema::dropIfExists('training_histories');
    }
}
