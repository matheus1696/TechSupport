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
        Schema::create('company_establishments_contact', function (Blueprint $table) {
            $table->id();
            $table->string('department');
            $table->string('contact_1')->nullable();
            $table->string('contact_2')->nullable();
            $table->string('type')->nullable()->default('Internal');
            $table->unsignedBigInteger('establishment_id');
            $table->timestamps();

            $table->foreign('establishment_id')->references('id')->on('company_establishments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_establishments_contact');
    }
};
