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
        Schema::create('detail_users', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin',['Laki - Laki','Perempuan']);
            $table->string('alamat');
            $table->string('sosial_media');
            $table->string('foto');
            $table->unsignedBigInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_users');
    }
};
