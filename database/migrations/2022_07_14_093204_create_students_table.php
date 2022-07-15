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
            $table->string('formal')->nullable();
            $table->string('ibu')->nullable();
            $table->string('ayah')->nullable();
            $table->string('tpttlahir')->nullable();
            $table->string('tgltlahir')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kamar')->nullable();
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
