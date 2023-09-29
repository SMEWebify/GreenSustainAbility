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
            $table->foreignId('emission_inventorie_id')->constrained('emissions_inventories');
            $table->string('regulatory_requirement');
            $table->enum('compliance_status', ['compliant', 'non-compliant']);
            $table->date('verification_date');
            $table->text('regulatory_comment')->nullable();
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
