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
        Schema::create('inventory_product_histories', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('invoice');
            $table->string('supply_order');
            $table->string('supply_company');
            $table->date('date');
            $table->string('movement');
            $table->integer('quantity');        
            $table->string('batch')->nullable();
            $table->string('due_date')->nullable();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('establishment_id');
            $table->unsignedBigInteger('establishment_department_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            
            $table->foreign('product_id')->references('id')->on('products');
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
        Schema::dropIfExists('inventory_product_histories');
    }
};
