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
        Schema::create('detail_alumnis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nisn');
            $table->unsignedBigInteger('id_user');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki laki', 'Perempuan']);
            $table->text('alamat');
            $table->unsignedBigInteger('id_jurusan');
            $table->integer('tahun_lulus');
            $table->bigInteger('no_ijazah');
            $table->unsignedBigInteger('id_jenjang_karir');
            $table->string('sosial_media');
            $table->string('foto');
            $table->enum('status', ['Belum diverifikasi', 'Diverifikasi']);
            $table->timestamps();


            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_jurusan')->references('id')->on('jurusans');
            $table->foreign('id_jenjang_karir')->references('id')->on('jenjang_karirs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_alumnis');
    }
};
