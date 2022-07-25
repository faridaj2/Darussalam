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
            $table->string('nis')->nullable();
            $table->string('nama')->nullable();
            $table->string('no_kk')->nullable();
            $table->string('no_nik')->nullable();
            $table->string('nisn')->nullable();
            $table->string('kelamin')->nullable();
            $table->string('ibu')->nullable();
            $table->string('ayah')->nullable();
            $table->string('tptlahir')->nullable();
            $table->date('tgllahir')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kamar')->nullable();
            $table->string('kls_formal')->nullable();
            $table->string('kls_diniyah')->nullable();
            $table->string('hp_ayah')->nullable();
            $table->string('hp_ibu')->nullable();
            $table->date('tahun_daftar')->nullable();
            $table->string('image_name')->nullable();
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
