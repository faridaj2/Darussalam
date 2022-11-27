<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbNamaPembayaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_nama_pembayarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pembayaran');
            $table->string('bulan_awal');
            $table->string('bulan_akhir');
            $table->integer('nilai_default');
            $table->string('status');
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
        Schema::dropIfExists('tb_nama_pembayarans');
    }
}
