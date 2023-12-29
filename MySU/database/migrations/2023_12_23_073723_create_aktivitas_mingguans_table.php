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
        Schema::create('aktivitas_mingguans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('tilawah');
            $table->integer('murajaah');
            $table->integer('puasa');
            $table->integer('tahajud');
            $table->integer('dhuha');
            $table->integer('infaq');
            $table->integer('wirid');
            $table->integer('olahraga');
            $table->integer('telp');
            $table->integer('hafalan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aktivitas_mingguans');
    }
};
