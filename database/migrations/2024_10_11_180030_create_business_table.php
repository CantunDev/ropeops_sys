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
        Schema::create('business', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('business_name', 100);
            $table->string('business_address', 100)->nullable();
            $table->string('rfc')->nullable();
            $table->string('telephone')->nullable();
            $table->string('business_line');
            $table->string('email')->unique();
            $table->string('web')->nullable();
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->string('regime')->nullable();
            $table->string('business_file')->nullable();
            $table->string('idregiment_sat')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business');
    }
};