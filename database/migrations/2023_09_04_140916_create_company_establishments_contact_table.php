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
            $table->string('dp_unidade');
            $table->string('con_unidade')->nullable();
            $table->string('con_unidade_2')->nullable();
            $table->string('con_principal')->nullable()->default('Interno');
            $table->unsignedBigInteger('estabelecimento_id');
            $table->timestamps();

            $table->foreign('estabelecimento_id')->references('id')->on('company_establishments');
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
