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
        Schema::create('raw_data_alumni', function (Blueprint $table) {
            $table->id();
            $table->integer('nisn')->unique();
            $table->string('nama_lengkap');
            $table->enum('program_keahlian', ['RPL, DKV, TKJ, MLOG, MP, AK, BR']);
            $table->year('tahun_lulus');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('raw_data_alumni');
    }
};
