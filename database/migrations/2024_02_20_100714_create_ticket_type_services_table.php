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
        Schema::create('ticket_type_services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('amount_sub_services')->nullable();
            $table->integer('amount_tickets')->nullable();
            $table->string('status')->default(1);
            $table->unsignedBigInteger('ticket_type_category_id');
            $table->timestamps();

            $table->foreign('ticket_type_category_id')->references('id')->on('ticket_type_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_type_services');
    }
};
