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
        Schema::create('stakeholder_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('incident_informations_id')->constrained('incident_informations');
            $table->string('name');
            $table->string('contact_details');
            $table->string('authorities_notified');
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
        Schema::dropIfExists('stakeholder_information');
    }
};
