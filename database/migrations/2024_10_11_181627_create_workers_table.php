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
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('lastname', 100);
            $table->string('surname', 100)->nullable();
            $table->string('phone', 100)->unique()->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('birthday')->nullable();
            $table->string('ine');
            $table->string('nss');
            $table->string('curp');
            $table->string('address');
            $table->string('cp',5);
            $table->string('bank');
            $table->string('account_number');
            $table->string('interbank_key');
            $table->string('card_number');
            $table->string('overalls_size');
            $table->string('shoe_number');
            $table->string('blood_type');
            $table->string('worker_file')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workers');
    }
};
