<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pays', function (Blueprint $table) {
            $table->id();
            $table->string('email',50)->nullable()->default(null);
            $table->string('phone',20)->nullable()->default(null);
            $table->string('student_name');
            $table->unsignedTinyInteger('payStatus')->nullable()->default(null);
            $table->unsignedBigInteger('price')->nullable()->default(null);
            $table->string('link')->nullable()->default(null);
            $table->timestamp('payTime')->nullable()->default(null);
            $table->string('type',10)->nullable()->default(null);
            $table->unsignedBigInteger('program_id')->nullable()->default(null);
            $table->unsignedBigInteger('university_id')->nullable()->default(null);
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
        Schema::dropIfExists('pays');
    }
}
