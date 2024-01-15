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
        Schema::create('detail_alumni', function (Blueprint $table) {
            $table->id('nisn');
            $table->unsignedBigInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users');
            $table->enum('jenis_kelamin',['Laki - Laki','Perempuan']); 
            $table->string('alamat');
            $table->string('media_sosial');
            $table->unsignedBigInteger('id_jurusan');
            $table->foreign('id_jurusan')->references('id')->on('jurusan');
            $table->unsignedBigInteger('id_tahun_lulus');
            $table->foreign('id_tahun_lulus')->references('id')->on('tahun_lulus');
            $table->string('no_ijazah');
            $table->unsignedBigInteger('id_jenjang_karir');
            $table->foreign('id_jenjang_karir')->references('id')->on('jenjang_karir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_alumni');
    }
};
