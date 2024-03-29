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
            $table->integer('nisn');
            $table->unsignedBigInteger('id_user');
            $table->enum('jenis_kelamin', ['Laki Laki', 'Perempuan']);
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('sosial_media');
            $table->unsignedBigInteger('id_jurusan');
            $table->integer('tahun_lulus');
            $table->integer('no_ijazah');
            $table->unsignedBigInteger('id_jenjang_karir');
            $table->string('foto');
            $table->enum('status', ['Belum diverifikasi', 'Diverifikasi']);
            $table->timestamps();
            $table->softDeletes();


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
