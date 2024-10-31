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
        Schema::create('quotes_providers', function (Blueprint $table) {
            $table->id();
            $table->string('folio');
            $table->foreignId('purchase_order_provider_id')->references('id')->on('purchases_orders_providers')->onDelete('cascade');
            $table->foreignId('provider_id')->references('id')->on('providers')->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->float('iva');
            $table->float('tax');
            $table->float('subtotal');
            $table->float('amount');
            $table->string('quotes_file');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes_providers');
    }
};
