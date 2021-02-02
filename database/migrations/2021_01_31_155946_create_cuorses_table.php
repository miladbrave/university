<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuorsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuorses', function (Blueprint $table) {
            $table->id();
            $table->string('faname',200)->nullable()->default(null);
            $table->string('enname',200);
            $table->unsignedTinyInteger('credit');
            $table->unsignedBigInteger('coursetype');
            $table->unsignedBigInteger('coursecategory');
            $table->text('description');
            $table->string('detail',255);
            $table->string('reference',255);
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
        Schema::dropIfExists('cuorses');
    }
}
