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
        Schema::create('expenses_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('expense_id')->references('id')->on('expenses')->onDelete('cascade');
            $table->float('quantity');
            $table->string('description');
            $table->float('cost');
            $table->float('discount');
            $table->float('iva');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses_details');
    }
};
