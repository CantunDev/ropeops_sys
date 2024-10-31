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
        Schema::create('quotes_companies', function (Blueprint $table) {
            $table->id();
            $table->string('folio', 100);
            $table->string('title');
            $table->string('description');
            $table->string('address');
            $table->string('cp');
            $table->date('date');
            $table->string('contact_name');
            $table->string('contact_phone');
            $table->string('contact_email');
            $table->string('condition_payment');
            $table->string('advance_payment');
            $table->integer('workdays');
            $table->foreignId('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->foreignId('service_id')->references('id')->on('request_services')->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->float('subtotal');
            $table->float('iva');
            $table->float('amount');
            $table->date('start');
            $table->integer('credit_days');
            $table->json('notes')->nullable();
            $table->tinyInteger('authorized');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes_companies');
    }
};
