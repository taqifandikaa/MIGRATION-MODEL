<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('matakuliahs', function (Blueprint $table) {
        $table->id();
        $table->string('Kode_Matakuliah')->unique();
        $table->string('Nama_Matakuliah');
        $table->string('Nama_Dosen');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table__matakuliah');
    }
};
