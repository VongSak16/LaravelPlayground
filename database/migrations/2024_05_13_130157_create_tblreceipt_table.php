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
        Schema::create('tblreceipt', function (Blueprint $table) {
            $table->id('ReceiptID');
            $table->integer('ReceiptNumber');
            $table->integer('WaitingNumber')->nullable();
            $table->date('DateOrder');
            $table->float('Vat')->nullable();
            $table->foreignId('ShopID');
            $table->foreignId('UserID');
            $table->foreignId('CustomerID');
            $table->foreignId('WifiID')->nullable();
            $table->foreignId('ExchangeID')->nullable();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblreceipt');
    }
};
