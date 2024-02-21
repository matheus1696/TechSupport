<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->date('data_last_interaction')->nullable();
            $table->integer('amount_interaction')->nullable();
            $table->date('ticket_reopened')->nullable();
            $table->unsignedInteger('ticket_status_id');
            $table->unsignedInteger('establishment_id');
            $table->unsignedInteger('type_service_id');
            $table->unsignedInteger('user_id');

            $table->foreign('ticket_status_id')->references('id')->on('ticket_statuses');
            $table->foreign('establishment_id')->references('id')->on('company_establishments');
            $table->foreign('type_service_id')->references('id')->on('ticket_type_services');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
