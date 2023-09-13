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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('phone',20)->nullable();
            // $table->integer('role_id');
            $table->tinyInteger('role_id');
            $table->uuid('bank_id')->nullable();
            $table->uuid('financial_institution_umi_id')->nullable();
            $table->string('photo')->nullable();
            // $table->uuid('regency_id')->nullable();
            $table->tinyInteger('regency_id')->nullable();
            // $table->uuid('district_id')->nullable();
            $table->tinyInteger('district_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
