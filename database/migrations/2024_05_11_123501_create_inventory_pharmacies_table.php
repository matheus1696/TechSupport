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
        Schema::create('inventory_pharmacies', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->integer('quantity_minimum')->nullable();
            $table->integer('quantity_maximum')->nullable();
            $table->unsignedBigInteger('medication_id');
            $table->unsignedBigInteger('establishment_id');
            $table->unsignedBigInteger('establishment_department_id');
            $table->timestamps();
            
            $table->foreign('medication_id')->references('id')->on('medications');
            $table->foreign('establishment_id')->references('id')->on('company_establishments');
            $table->foreign('establishment_department_id')->references('id')->on('company_establishment_departments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_pharmacies');
    }
};
