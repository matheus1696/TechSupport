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
        Schema::create('inventory_supply_histories', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('invoice')->nullable();;
            $table->string('supply_order')->nullable();;
            $table->string('supply_company')->nullable();;
            $table->date('date');
            $table->string('movement');
            $table->integer('quantity');        
            $table->string('batch')->nullable();
            $table->string('due_date')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('supply_id');
            $table->unsignedBigInteger('establishment_id');
            $table->unsignedBigInteger('establishment_department_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            
            $table->foreign('supply_id')->references('id')->on('supplies');
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
        Schema::dropIfExists('inventory_supply_histories');
    }
};
