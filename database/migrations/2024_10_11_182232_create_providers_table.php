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
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('company_name');
            $table->string('slug', 100);
            $table->string('email')->unique();
            $table->string('telephone');
            $table->string('rfc');
            $table->string('address')->nullable();
            $table->string('cp');
            $table->integer('credit_days')->nullable();
            $table->string('bank', 100)->nullable();
            $table->string('account_number', 100)->nullable();
            $table->string('interbank_key', 100)->nullable();
            $table->string('card_number', 100)->nullable();
            $table->string('name_contact', 100)->nullable();
            $table->string('email_contact', 100)->unique()->nullable();
            $table->string('phone_contact', 100)->unique()->nullable();
            $table->string('provider_file', 100)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('providers');
    }
};
