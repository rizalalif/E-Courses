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
        Schema::create('paket_details', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('paket_id')->constrained(table: 'pakets', indexName: 'paket_details_paket_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('paketable_id')->constrained(table: 'paket_users', indexName: 'paket_details_paket_user_id')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('status', ['soal', 'materi']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_details');
    }
};
