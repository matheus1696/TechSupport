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
        Schema::create('ticket_type_sub_services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('response_time')->default(72);
            $table->integer('amount_tickets')->nullable();
            $table->boolean('public')->default(1);
            $table->boolean('status')->default(1);
            $table->unsignedBigInteger('ticket_type_service_id');
            $table->timestamps();

            $table->foreign('ticket_type_service_id')->references('id')->on('ticket_type_services');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_type_sub_services');
    }
};
