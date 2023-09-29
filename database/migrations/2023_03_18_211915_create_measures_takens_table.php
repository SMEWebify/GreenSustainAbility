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
        Schema::create('measures_takens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('incident_informations_id')->constrained('incident_informations');
            $table->text('action_taken');
            $table->text('teams_involved');
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
        Schema::dropIfExists('measures_takens');
    }
};
