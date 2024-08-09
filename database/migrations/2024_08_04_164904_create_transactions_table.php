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
        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('code');
            $table->foreignUuid('buyer_id')->constrained(table: 'users', indexName: 'transaction_buyer_id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('buyer_name');
            $table->string('buyer_phone_number');
            $table->integer('quantity');
            $table->decimal('total_price', 8, 2);
            $table->enum('status', ['pending', 'success', 'failed'])->default('pending');
            $table->text('payment_proof');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
