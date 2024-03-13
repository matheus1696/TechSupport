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
        Schema::create('supply_process_requestings', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('user_organization');
            $table->string('user_cpf');
            $table->string('user_registration');
            $table->string('user_contact_1');
            $table->string('user_contact_2');
            $table->boolean('status')->default(TRUE);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supply_process_requestings');
    }
};
