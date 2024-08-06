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
        Schema::create('soal_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('soal_id')->constrained(table: 'soals', indexName: 'soal_details_soal_id')->onUpdate('cascade')->onDelete('cascade');
            $table->text('soal');
            $table->text('jawaban_a');
            $table->text('jawaban_b');
            $table->text('jawaban_c');
            $table->text('jawaban_d');
            $table->text('jawaban_e');
            $table->text('kunci_jawaban');
            $table->text('pembahasan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soal_details');
    }
};
