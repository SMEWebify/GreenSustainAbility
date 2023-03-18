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
        Schema::create('reporting_communications', function (Blueprint $table) {
            $table->id();
            $table->date('report_date');
            $table->string('emission_type');
            $table->float('emission_quantity');
            $table->string('report_type');
            $table->string('communication_target');
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
        Schema::dropIfExists('reporting_communications');
    }
};
