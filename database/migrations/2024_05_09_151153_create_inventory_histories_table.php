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
        Schema::create('inventory_histories', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('movement');
            $table->integer('quantity');
            $table->unsignedBigInteger('consumable_id');
            $table->unsignedBigInteger('establishment_id');            
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            
            $table->foreign('consumable_id')->references('id')->on('consumables');
            $table->foreign('establishment_id')->references('id')->on('company_establishments');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_histories');
    }
};
