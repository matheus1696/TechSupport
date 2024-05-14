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
        Schema::create('inventory_medication_histories', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->date('date');
            $table->string('movement');
            $table->integer('quantity');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('medication_id');
            $table->unsignedBigInteger('establishment_id');
            $table->unsignedBigInteger('establishment_department_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            
            $table->foreign('medication_id')->references('id')->on('medications');
            $table->foreign('establishment_id')->references('id')->on('company_establishments');
            $table->foreign('establishment_department_id')->references('id')->on('company_establishment_departments');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_medication_histories');
    }
};
