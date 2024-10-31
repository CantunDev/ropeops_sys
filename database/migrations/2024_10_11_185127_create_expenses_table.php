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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->string('folio');
            $table->date('date');
            $table->string('reference');
            $table->float('discount');
            $table->foreignId('accounting_account_id')->references('id')->on('accounting_accounts')->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('purchase_id')->references('id')->on('purchases')->onDelete('cascade');
            $table->foreignId('type_expense_id')->references('id')->on('type_expenses')->onDelete('cascade');
            $table->foreignId('subtype_expense_id')->references('id')->on('subtype_expenses')->onDelete('cascade');
            $table->foreignId('provider_id')->references('id')->on('providers')->onDelete('cascade');
            $table->float('discount_general');
            $table->float('subtotal');
            $table->float('iva');
            $table->float('tax');
            $table->float('amount');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
