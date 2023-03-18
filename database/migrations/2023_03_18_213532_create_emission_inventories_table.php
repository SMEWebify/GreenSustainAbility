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
        Schema::create('emission_inventories', function (Blueprint $table) {
            $table->id();
            $table->date('measurement_date');
            $table->string('emission_type');
            $table->float('emission_quantity');
            $table->string('emission_source');
            $table->string('emission_location');
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
        Schema::dropIfExists('emission_inventories');
    }
};
