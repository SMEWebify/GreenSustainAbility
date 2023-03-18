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
        Schema::create('regulatory_compliances', function (Blueprint $table) {
            $table->id();
            $table->string('emission_type');
            $table->string('emission_source');
            $table->string('regulatory_requirement');
            $table->enum('compliance_status', ['compliant', 'non-compliant']);
            $table->date('verification_date');
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('regulatory_compliances');
    }
};
