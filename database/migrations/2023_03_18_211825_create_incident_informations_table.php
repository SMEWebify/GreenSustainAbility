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
        Schema::create('incident_informations', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('time');
            $table->string('location');
            $table->text('description');
            $table->string('material_type');
            $table->integer('quantity');
            $table->string('unit')->nullable();
            $table->integer('statu')->default(1);
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
        Schema::dropIfExists('incident_informations');
    }
};
