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
        Schema::create('cek_data_alumnis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nisn')->unique();
            $table->unsignedBigInteger('id_user');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['Laki laki', 'Perempuan']);
            $table->text('alamat');
            $table->string('sosial_media');
            $table->unsignedBigInteger('id_jurusan');
            $table->integer('tahun_lulus');
            $table->bigInteger('no_ijazah')->unique();
            $table->string('foto');
            $table->enum('jenjang_karir', ['Bekerja', 'Kuliah', 'Belum bekerja', 'Wirausaha']);
            $table->enum('Status', ['Menunggu Acc', 'Sudah Di Acc '])->default('Menunggu Acc');
            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_jurusan')->references('id')->on('jurusans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cek_data_alumnis');
    }
};
