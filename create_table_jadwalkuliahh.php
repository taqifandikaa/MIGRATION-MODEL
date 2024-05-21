<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatejadwalkuliahhsTable extends Migration
{
    public function up()
    {
        Schema::create('jadwalkuliahhs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('NPM');
            $table->unsignedBigInteger('Id_Prodi');
            $table->unsignedBigInteger('Id_Matakuliah');
            $table->time('Jam');
            $table->string('Ruangan');
            $table->timestamps();

            // Menambahkan foreign key constraint
            $table->foreign('NPM')->references('id')->on('mahasiswaas')->onDelete('cascade');
            $table->foreign('Id_Prodi')->references('id')->on('prodiis')->onDelete('cascade');
            $table->foreign('Id_Matakuliah')->references('id')->on('matakuliahs')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('jadwalkuliahhs');
    }
}