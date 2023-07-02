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
        Schema::create('forums', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('kelas' , ['XI' , 'XII' , 'XIII']);
            $table->enum('jurusan' , ['TJKT / TKJ' , 'DKV / MM' , 'PPLG / RPL' , 'Broadcasting / BC']);
            $table->string('pesan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forums');
    }
};
