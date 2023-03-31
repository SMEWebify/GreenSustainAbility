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
        Schema::create('non_conformities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('audit_data_id')->constrained('audit_data');
            $table->string('non_conformity_description');
            $table->string('corrective_actions');
            $table->string('preventive_actions');
            $table->boolean('is_closed')->default(false);
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
        Schema::dropIfExists('non_conformities');
    }
};
