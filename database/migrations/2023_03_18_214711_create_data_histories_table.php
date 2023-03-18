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
        Schema::create('data_histories', function (Blueprint $table) {
            $table->id();
            $table->string('indicator_type');
            $table->float('indicator_value');
            $table->string('measurement_unit');
            $table->dateTime('measurement_datetime');
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
        Schema::dropIfExists('data_histories');
    }
};
