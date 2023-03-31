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
            $table->string('action_description');
            $table->string('responsible_party');
            $table->date('due_date');
            $table->date('completion_date');
            $table->string('status');
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
