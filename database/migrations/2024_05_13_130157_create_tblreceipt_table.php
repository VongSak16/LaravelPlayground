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
            $table->bigInteger('ShopID');
            $table->bigInteger('UserID');
            $table->unsignedBigInteger('CustomerID');
            $table->foreign('CustomerID')->nullable()->references('CustomerID')->on('tblcustomer')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('WifiID');
            $table->foreign('WifiID')->nullable()->references('WifiID')->on('tblwifi')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('ExchangeID')->nullable();
            $table->foreign('ExchangeID')->nullable()->references('ExchangeID')->on('tblexchangerate')->onUpdate('cascade')->onDelete('cascade');
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
