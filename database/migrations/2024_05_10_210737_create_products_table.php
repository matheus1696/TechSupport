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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique()->nullable();
            $table->string('title');
            $table->string('filter');
            $table->string('description')->nullable();
            $table->string('status')->default(1);
            $table->unsignedBigInteger('product_classification_id');
            $table->unsignedBigInteger('product_unit_id');
            $table->unsignedBigInteger('product_type_id');
            $table->timestamps();

            $table->foreign('product_classification_id')->references('id')->on('product_classifications');
            $table->foreign('product_unit_id')->references('id')->on('product_units');
            $table->foreign('product_type_id')->references('id')->on('product_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};