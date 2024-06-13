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
        Schema::create('rooms', function (Blueprint $table) {

            $table->id();
            $table->integer('number')->unsigned();
            $table->foreignId('roomtype_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->enum('status', ['available', 'occupied', 'under_maintenance'])->default('available');
            $table->foreignId('book_id')->nullable()->constrained()->onDelete('set null')->onUpdate('cascade');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
