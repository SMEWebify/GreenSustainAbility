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
        Schema::create('emission_calculations_datas', function (Blueprint $table) {
            $table->id();
            $table->string('emission_type');
            $table->string('emission_source');
            $table->string('emission_calculation_method');
            $table->float('emission_calculation_result');
            $table->date('date_of_calculation');
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
        Schema::dropIfExists('emission_calculations_datas');
    }
};
