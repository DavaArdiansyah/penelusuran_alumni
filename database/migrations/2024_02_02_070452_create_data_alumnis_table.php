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
        Schema::create('data_alumni', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_users');
            $table->unsignedBigInteger('id_raw_data_alumnis');
            $table->enum('jenis_kelamin', ['Laki-Laki, Perempuan']);
            $table->date('tanggal_lahir');
            $table->string('no_telp');
            $table->text('alamat');
            $table->string('sosial_media');
            $table->string('foto');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_users')->references('id')->on('user');
            $table->foreign('id_raw_data_alumnis')->references('id')->on('raw_data_alumni');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_alumni');
    }
};
