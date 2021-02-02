<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pre_courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cuorse_id');
            $table->unsignedBigInteger('pre_course_id');

            $table->foreign('cuorse_id')->references('id')->on('cuorses')
                                                ->onDelete('cascade')
                                                ->onUpdate('cascade');
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
        Schema::dropIfExists('pre_courses');
    }
}
