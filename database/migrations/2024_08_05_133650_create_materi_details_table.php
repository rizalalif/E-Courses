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
        Schema::create('materi_details', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('materi_id')->constrained(table: 'materis', indexName: 'materi_details_materi_id')->onUpdate('cascade')->onDelete('cascade');
            $table->text('materi');
            $table->integer('page_number');
            $table->enum('status',['finish','draft'])->default('draft');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materi_details');
    }
};
