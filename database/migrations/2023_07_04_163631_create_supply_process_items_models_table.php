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
        Schema::create('supply_process_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('process_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('amount_adm')->nullable();
            $table->integer('amount_atb')->nullable();
            $table->integer('amount_mac')->nullable();
            $table->integer('amount_vsan')->nullable();
            $table->integer('amount_vepd')->nullable();
            $table->unsignedBigInteger('units_id');
            $table->text('warranty');
            $table->text('reference_model_1')->nullable();
            $table->text('reference_model_2')->nullable();
            $table->text('reference_model_3')->nullable();
            $table->timestamps();

            $table->foreign('process_id')->references('id')->on('supply_processes');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('units_id')->references('id')->on('product_units');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supply_process_items');
    }
};
