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
            $table->text('intended_results');
            $table->text('requirements');
            $table->text('measures_adopted');
            $table->string('modality');
            $table->unsignedBigInteger('demantant_user_id');
            $table->string('demantant_name');
            $table->string('demantant_organization');
            $table->string('demantant_registration');
            $table->string('demantant_cpf');
            $table->unsignedBigInteger('requesting_user_id');
            $table->string('requesting_name');
            $table->string('requesting_organization');
            $table->string('requesting_registration');
            $table->string('requesting_cpf');
            $table->string('code_process')->unique()->nullable();
            $table->string('code_auction')->unique()->nullable();
            $table->string('code_contract')->unique()->nullable();
            $table->string('code_price_registration')->unique()->nullable();
            $table->date('start_date')->nullable();
            $table->date('due_date')->nullable();            
            $table->unsignedBigInteger('inspector_head_user_id');
            $table->string('inspector_head_name');
            $table->string('inspector_head_organization');
            $table->string('inspector_head_registration');  
            $table->string('inspector_head_cpf');         
            $table->unsignedBigInteger('inspector_deputy_user_id');
            $table->string('inspector_deputy_name');
            $table->string('inspector_deputy_organization');
            $table->string('inspector_deputy_registration'); 
            $table->string('inspector_deputy_cpf');       
            $table->integer('validity')->nullable();
            
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('status_id')->references('id')->on('supply_process_statuses');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('demantant_user_id')->references('id')->on('users');
            $table->foreign('requesting_user_id')->references('id')->on('users');
            $table->foreign('inspector_head_user_id')->references('id')->on('users');
            $table->foreign('inspector_deputy_user_id')->references('id')->on('users');
            
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
