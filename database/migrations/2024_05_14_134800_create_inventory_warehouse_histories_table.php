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
        Schema::create('inventory_warehouse_histories', function (Blueprint $table) {
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
            $table->text('pending')->default(TRUE);
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('financial_block_id');
            $table->unsignedBigInteger('establishment_entry_id')->nullable();
            $table->unsignedBigInteger('establishment_department_entry_id')->nullable();
            $table->unsignedBigInteger('establishment_exit_id')->nullable();
            $table->unsignedBigInteger('establishment_department_exit_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('establishment_entry_id')->references('id')->on('company_establishments');
            $table->foreign('establishment_department_entry_id')->references('id')->on('company_establishment_departments');
            $table->foreign('establishment_exit_id')->references('id')->on('company_establishments');
            $table->foreign('establishment_department_exit_id')->references('id')->on('company_establishment_departments');
            $table->foreign('financial_block_id')->references('id')->on('company_financial_blocks');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_warehouse_histories');
    }
};
