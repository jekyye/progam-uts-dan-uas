<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('tempat_lahir', 100)->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin', 20)->nullable();
            $table->text('alamat')->nullable();
            $table->string('sekolah_asal', 50)->nullable();
            $table->decimal('nilai_mtk', 5, 2)->nullable();
            $table->decimal('nilai_bing', 5, 2)->nullable();
            $table->decimal('nilai_bindo', 5, 2)->nullable();
            $table->string('jurusan1', 100)->nullable();
            $table->string('jurusan2', 100)->nullable();
            $table->text('alasan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
