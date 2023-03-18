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
        Schema::create('follow_up_actions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('incident_id')->constrained('incident_informations');
            $table->text('corrective_action_description');
            $table->dateTime('implementation_timetable');
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
        Schema::dropIfExists('follow_up_actions');
    }
};
