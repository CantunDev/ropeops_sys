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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable();
            $table->string('company_name', 100)->nullable();
            $table->string('slug', 100)->nullable();
            $table->string('rfc', 100)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('cp', 5)->nullable();
            $table->string('telephone')->unique()->nullable();
            $table->string('email')->unique();
            $table->integer('credit_days')->unsigned();
            $table->string('bank')->nullable();
            $table->string('account_number',100)->nullable();
            $table->string('interbank_key',100)->nullable();
            $table->string('card_number',100)->nullable();
            $table->string('name_contact', 100);
            $table->string('email_contact', 100)->unique();
            $table->string('phone_contact', 100)->unique();
            $table->string('company_file')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
