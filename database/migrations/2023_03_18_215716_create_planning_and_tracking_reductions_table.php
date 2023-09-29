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
        Schema::create('planning_and_tracking_reductions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('emission_inventorie_id')->constrained('emissions_inventories');
            $table->float('reduction_target');
            $table->string('reduction_measures');
            $table->float('reduction_results');
            $table->date('date_of_implementation');
            $table->text('reduction_comment')->nullable();
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
        Schema::dropIfExists('planning_and_tracking_reductions');
    }
};
