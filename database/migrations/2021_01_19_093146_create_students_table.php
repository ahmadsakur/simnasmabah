<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('kode')->unique();
            $table->string('nama');
            $table->string('TTL');
            $table->integer('NIS');
            $table->string('NISN');
            $table->string('Kelas');
            $table->string('no_peserta');
            $table->string('wali_murid');
            $table->string('no_surat')->unique();
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
        Schema::dropIfExists('students');
    }
}
