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
        Schema::create('supplies', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique()->nullable();
            $table->string('title');
            $table->string('filter');
            $table->string('description')->nullable();
            $table->boolean('status')->default(TRUE);
            $table->unsignedBigInteger('supply_classification_id');
            $table->unsignedBigInteger('supply_unit_id');
            $table->unsignedBigInteger('supply_type_id');
            $table->timestamps();

            $table->foreign('supply_classification_id')->references('id')->on('supply_classifications');
            $table->foreign('supply_unit_id')->references('id')->on('supply_units');
            $table->foreign('supply_type_id')->references('id')->on('supply_types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplies');
    }
};
