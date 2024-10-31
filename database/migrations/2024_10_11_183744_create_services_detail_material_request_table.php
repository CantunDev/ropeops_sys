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
        Schema::create('services_detail_material_request', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_material_id')->references('id')->on('services_material_request')->onDelete('cascade');
            $table->string('concept');
            $table->string('unit');
            $table->float('quantity');
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services_detail_material_request');
    }
};
