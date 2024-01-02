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
        Schema::create('perizinan_pulangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat');
            // $table->string('no_telp');
            $table->string('alasan');
            // $table->string('jam_pulang');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perizinan_pulangs');
    }
};
