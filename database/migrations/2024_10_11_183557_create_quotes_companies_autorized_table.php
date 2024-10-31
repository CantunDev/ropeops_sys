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
        Schema::create('quotes_companies_autorized', function (Blueprint $table) {
            $table->id();
            $table->foreignId('quote_company_id')->references('id')->on('quotes_companies')->onDelete('cascade');
            $table->string('quotes_file_autorized');
            $table->string('notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes_companies_autorized');
    }
};
