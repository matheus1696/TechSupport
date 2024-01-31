<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     *  Run the migrations.
     */
    public function up(): void
    {
        Schema::create('company_establishments', function (Blueprint $table) {
            $table->id();
            $table->integer('code')->nullable()->unique();
            $table->string('title')->unique();
            $table->string('filter');
            $table->string('address');
            $table->string('number');
            $table->string('district');
            $table->unsignedBigInteger('city_id');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->unsignedBigInteger('type_establishment_id');
            $table->unsignedBigInteger('attention_level_id');
            $table->text('description')->nullable();
            $table->string('status')->default(true);
            $table->timestamps();

            $table->foreign('city_id')->references('id')->on('region_cities');
            $table->foreign('type_establishment_id')->references('id')->on('company_type_establishments');
            $table->foreign('attention_level_id')->references('id')->on('company_attention_levels');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_establishments');
    }
};
