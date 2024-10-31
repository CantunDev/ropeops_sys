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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->foreignId('group_material_id')->references('id')->on('group_materials')->onDelete('cascade');
            $table->string('unit');
            $table->float('inventory');
            $table->float('cost');
            $table->float('average_cost');
            $table->float('tax');
            $table->float('tax_cost');
            $table->float('existence_alert');
            $table->tinyInteger('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};
