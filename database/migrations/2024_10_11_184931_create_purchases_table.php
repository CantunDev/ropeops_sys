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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->string('folio');
            $table->string('reference');
            $table->timestamp('date_application');
            $table->foreignId('quote_provider_id')->references('id')->on('quotes_providers')->onDelete('cascade');
            $table->foreignId('purchase_order_providers')->references('id')->on('purchases_orders_providers')->onDelete('cascade');
            $table->foreignId('provider_id')->references('id')->on('providers')->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('folio_invoice');
            $table->date('date_invoice');
            $table->date('date_due');
            $table->float('discount');
            $table->float('subtotal');
            $table->float('tax');
            $table->float('amount');
            $table->string('puchase_file');
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
        Schema::dropIfExists('purchases');
    }
};
