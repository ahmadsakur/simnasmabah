<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUjianPraktekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ujian_praktek', function (Blueprint $table) {
            $table->id();
            $table->integer('kode');
            $table->foreign('kode')->references('kode')->on('students')->onUpdate('cascade')->onDelete('cascade');
            //kelompok A
            $table->float('agama', 5, 2)->default('0');
            $table->float('PPKn', 5, 2)->default('0');
            $table->float('bahasa_indonesia', 5, 2)->default('0');
            $table->float('matematika', 5, 2)->default('0');
            $table->float('sejarah_indonesia', 5, 2)->default('0');
            $table->float('bahasa_inggris', 5, 2)->default('0');
            //kelompok B
            $table->float('seni_budaya', 5, 2)->default('0');
            $table->float('PJOK', 5, 2)->default('0');
            $table->float('PKWU', 5, 2)->default('0');
            $table->float('bahasa_jawa', 5, 2)->default('0');
            //kelompok C
            $table->float('jurusan1', 5, 2)->default('0');
            $table->float('jurusan2', 5, 2)->default('0');
            $table->float('jurusan3', 5, 2)->default('0');
            $table->float('jurusan4', 5, 2)->default('0');
            $table->float('peminatan', 5, 2)->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ujian_praktek');
    }
}
