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
        Schema::create('progress_materi_users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('materi_id')->constrained(table: 'materis', indexName: 'progress_materi_users_materi_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignUuid('user_id')->constrained(table: 'users', indexName: 'progress_materi_users_user_id')->onUpdate('cascade')->onDelete('cascade');
            $table->enum('status', ['finish', 'pending'])->default('pending');
            $table->integer('page_number_readed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progress_materi_users');
    }
};
