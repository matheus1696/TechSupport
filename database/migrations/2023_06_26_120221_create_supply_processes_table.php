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
            $table->string('demantant_department');
            $table->string('demantant_user');
            $table->string('demantant_cpf');
            $table->string('demantant_registration');
            $table->string('requesting_department');
            $table->string('requesting_user');
            $table->string('requesting_cpf');
            $table->string('requesting_registration');
            $table->text('intended_results');
            $table->text('requirements');
            $table->text('measures_adopted');
            $table->string('inspector_head_name');
            $table->string('inspector_head_ocuppation');            
            $table->string('inspector_head_cpf');
            $table->string('inspector_head_registration');
            $table->string('inspector_deputy_name');
            $table->string('inspector_deputy_ocuppation');            
            $table->string('inspector_deputy_cpf');            
            $table->string('inspector_deputy_registration');
            $table->string('modality');
            $table->string('code_process')->unique()->nullable();
            $table->string('code_auction')->unique()->nullable();
            $table->string('code_contract')->unique()->nullable();
            $table->string('code_price_registration')->unique()->nullable();
            $table->date('start_date')->nullable();
            $table->date('due_date')->nullable();
            $table->integer('validity')->nullable();
            $table->unsignedBigInteger('company_organization_id')->nullable();
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('company_organization_id')->references('id')->on('company_organizations');
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
