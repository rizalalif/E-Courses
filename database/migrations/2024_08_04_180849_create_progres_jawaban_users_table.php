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
        Schema::create('progres_jawaban_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('soal_id')->constrained(table: 'soals', indexName: 'progress_materi_users_soal_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('user_id')->constrained(table: 'users', indexName: 'progress_materi_users_user_id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('detail_soal_id')->constrained(table: 'soal_details', indexName: 'progress_materi_users_soal_detail_id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('jawaban');
            $table->enum('status', ['finish', 'inactive'])->default('draft');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progres_jawaban_users');
    }
};
