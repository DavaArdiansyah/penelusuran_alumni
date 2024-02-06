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
        Schema::create('riwayat_pendidikan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_data_alumnis');
            $table->string('jenjang_pendidikan');
            $table->string('nama_sekolah');
            $table->year('tahun_lulus');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_data_alumnis')->references('id')->on('data_alumni');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_pendidikan');
    }
};
