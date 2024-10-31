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
        Schema::create('departure_tickets_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('departure_ticket_id')->references('id')->on('departure_tickets')->onDelete('cascade');
            $table->string('concept');
            $table->float('quantity_request');
            $table->float('quantity_assorted');
            $table->string('unit');
            $table->float('unit_cost');
            $table->float('amount');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departure_tickets_details');
    }
};
