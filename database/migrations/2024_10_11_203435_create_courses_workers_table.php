<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\ColumnDefinition;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses_workers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('worker_id')->references('id')->on('workers')->onDelete('cascade');
            $table->foreignId('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->string('number');
            $table->date('start_date')->nullable();
            $table->date('expire_date')->nullable();
            $table->float('average')->nullable();
            $table->string('course_file')->nullable();     
            $table->tinyInteger('status');   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses_workers');
    }
};
