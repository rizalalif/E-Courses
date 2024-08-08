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
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('transaction_id')->constrained(table: 'transactions', indexName: 'transactions_detail_transaction_id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('paket_name');
            $table->string('paket_description');
            $table->decimal('price', 10, 2);
            $table->timestamps();


        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_details');
    }
};
