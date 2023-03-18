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
        Schema::create('emissions_reportings', function (Blueprint $table) {
            $table->id();
            $table->string('emission_type');
            $table->string('emission_source');
            $table->float('emission_amount');
            $table->date('date_of_emission');
            $table->string('time_period');
            $table->string('emissions_trend');
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('emissions_reportings');
    }
};
