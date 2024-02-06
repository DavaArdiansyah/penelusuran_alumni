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
        Schema::create('riwayat_kerja', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_data_alumnis');
            $table->string('nama_perusahaan');
            $table->text('alamat_pekerjaan');
            $table->string('jabatan');
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
        Schema::dropIfExists('riwayat_kerja');
    }
};