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
        Schema::create('follow_up_actions_audits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('audit_data_id')->constrained('audit_data');
            $table->string('description');
            $table->boolean('is_completed')->default(false);
            $table->date('deadline');
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
        Schema::dropIfExists('follow_up_actions_audits');
    }
};