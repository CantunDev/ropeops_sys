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
        Schema::create('quotes_companies_details', function (Blueprint $table) {
            // $table->id();
            $table->string('description');
            $table->integer('quantity');
            $table->float('unit');
            $table->float('unit_price');
            $table->float('amount');
            $table->foreignId('quote_company_id')->references('id')->on('quotes_companies')->onDelete('cascade');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes_companies_details');
    }
};
