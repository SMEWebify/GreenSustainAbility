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
        Schema::create('audit_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('audit_schedule_id')->constrained('audit_schedules');
            $table->date('date');
            $table->string('auditor');
            $table->string('audit_type');
            $table->string('results');
            $table->string('findings');
            $table->string('recommendations');
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
        Schema::dropIfExists('audit_data');
    }
};
