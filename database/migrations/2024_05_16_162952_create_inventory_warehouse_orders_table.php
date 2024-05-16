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
        Schema::create('inventory_warehouse_orders', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->unsignedBigInteger('inventory_warehouse_order_status_id')->default(1);
            $table->unsignedBigInteger('inventory_warehouse_history_id')->nullable();
            $table->unsignedBigInteger('establishment_entry_id')->nullable();
            $table->unsignedBigInteger('establishment_department_entry_id')->nullable();
            $table->unsignedBigInteger('establishment_exit_id')->nullable();
            $table->unsignedBigInteger('establishment_department_exit_id')->nullable();
            $table->timestamps();
            
            $table->foreign('inventory_warehouse_order_status_id')->references('id')->on('inventory_warehouse_order_statuses');
            $table->foreign('inventory_warehouse_history_id')->references('id')->on('inventory_warehouse_histories');
            $table->foreign('establishment_entry_id')->references('id')->on('company_establishments');
            $table->foreign('establishment_department_entry_id')->references('id')->on('company_establishment_departments');
            $table->foreign('establishment_exit_id')->references('id')->on('company_establishments');
            $table->foreign('establishment_department_exit_id')->references('id')->on('company_establishment_departments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_warehouse_orders');
    }
};
