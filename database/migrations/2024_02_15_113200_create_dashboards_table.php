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
        Schema::create('dashboards', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('link_mobile')->nullable();
            $table->text('link_desktop')->nullable();
            $table->boolean('status')->default(true);
            $table->unsignedBigInteger('financial_block_id');
            $table->timestamps();
            
            $table->foreign('financial_block_id')->references('id')->on('company_financial_blocks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dashboards');
    }
};
