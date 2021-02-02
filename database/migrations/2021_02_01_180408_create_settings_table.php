<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('word_price')->nullable()->default(null);
            $table->unsignedBigInteger('pdf_price')->nullable()->default(null);
            $table->string('titlefile',255)->nullable()->default(null);
            $table->string('guide',255)->nullable()->default(null);
            $table->text('description')->nullable()->default(null);
            $table->text('description2')->nullable()->default(null);
            $table->string('time',100)->nullable()->default(null);
            $table->string('phone',20)->nullable()->default(null);
            $table->string('email',100)->nullable()->default(null);
            $table->string('telegram',200)->nullable()->default(null);
            $table->string('whats',200)->nullable()->default(null);
            $table->string('sitename',50)->nullable()->default(null);
            $table->string('sitedes',255)->nullable()->default(null);
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
        Schema::dropIfExists('settings');
    }
}
