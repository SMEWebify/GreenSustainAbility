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
        Schema::create('analysis_reportings', function (Blueprint $table) {
            $table->id();
            $table->string('indicator_type');
            $table->float('indicator_value');
            $table->string('measurement_unit');
            $table->dateTime('measurement_datetime');
            $table->string('summary_statistics');
            $table->string('trend');
            $table->string('sustainability_goals');
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
        Schema::dropIfExists('analysis_reportings');
    }
};
