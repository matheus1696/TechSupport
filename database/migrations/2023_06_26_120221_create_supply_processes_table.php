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
        Schema::create('supply_processes', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->string('filter');
            $table->text('description');
            $table->string('code_process')->unique()->nullable();
            $table->string('code_auction')->unique()->nullable();
            $table->string('code_contract')->unique()->nullable();
            $table->string('code_price_registration')->unique()->nullable();
            $table->date('start_date')->nullable();
            $table->date('due_date')->nullable();
            $table->integer('validity')->nullable();
            $table->unsignedBigInteger('company_organizational_id')->nullable();
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('company_organizational_id')->references('id')->on('company_organizational');
            $table->foreign('status_id')->references('id')->on('supply_process_statuses');
            $table->foreign('user_id')->references('id')->on('users');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supply_processes');
    }
};
