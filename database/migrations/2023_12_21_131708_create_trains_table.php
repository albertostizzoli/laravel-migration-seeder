<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 100);
            $table->string('departure_station',100);
            $table->string('arrival_station',100);
            $table->time('departure');
            $table->time('arrived');
            $table->string('train_code', 10);
            $table->smallInteger('number_carriages')->unsigned();
            $table->boolean('in_time')->default(1);
            $table->boolean('deleted')->default(1);
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
        Schema::dropIfExists('trains');
    }
};
