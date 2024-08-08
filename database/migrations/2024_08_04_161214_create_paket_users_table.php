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
        Schema::create('paket_users', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('user_id')->constrained(table: 'users', indexName: 'paket_users_users_id')->onUpdate('cascade')->onDelete('cascade');
            $table->string('paket_name');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->integer('day_active_paket');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket_users');
    }
};
