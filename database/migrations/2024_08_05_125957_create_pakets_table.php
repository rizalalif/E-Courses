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
        Schema::create('pakets', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('kategori_id')->constrained(table: 'kategori_pakets', indexName: 'paket_kategori_id')->onUpdate('cascade')->onDelete('cascade');
            $table->text('thumbnail');
            $table->string('name');
            $table->text('description');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->integer('day_active_paket');
            $table->enum('paket_type', ['free', 'purchase'])->default('free');
            $table->decimal('price', 10, 2);
            $table->float('discount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pakets');
    }
};
