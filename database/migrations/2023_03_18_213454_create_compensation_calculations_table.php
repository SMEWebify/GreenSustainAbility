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
        Schema::create('compensation_calculations', function (Blueprint $table) {
            $table->id();
            $table->date('calculation_date');
            $table->string('emission_type');
            $table->float('emission_quantity');
            $table->string('compensation_opportunity');
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
        Schema::dropIfExists('compensation_calculations');
    }
};
