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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('kode_guru');
            $table->string('nama');
            $table->enum('mataPelajaran',['Bahasa Indonesia' , 'Matematika', 'IPA','IPS',
            'Bahasa Inggris' , 'Seni Budaya' , 'Pendidikan Agama' ,'Penjaskes' ,'Kewarganegaraan']);
            $table->string('nomorTelpon');
            $table->string('alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
