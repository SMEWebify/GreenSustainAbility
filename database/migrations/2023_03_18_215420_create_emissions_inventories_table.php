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
        Schema::create('emissions_inventories', function (Blueprint $table) {
            $table->id();
            $table->string('emission_type');
            $table->string('emission_source');
            $table->string('emission_location');
            $table->float('emission_amount');
            $table->date('date_of_emission');
            $table->text('emission_comment')->nullable();
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
        Schema::dropIfExists('emissions_inventories');
    }
};
