<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string('faname',200)->nullable()->default(null);
            $table->string('enname',200);
            $table->string('facity',100)->nullable()->default(null);
            $table->string('encity',100);
            $table->text('address',600);
            $table->string('phone',20);
            $table->string('web',50);
            $table->string('email')->unique();
            $table->string('postcode');
            $table->string('slug');
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
        Schema::dropIfExists('universities');
    }
}
