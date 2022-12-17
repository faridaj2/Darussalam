<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSppListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('spp_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tb_nama_pembayaran_id');
            $table->foreignId('student_id');
            $table->foreignId('bulan_spp_id');
            $table->string('jumlah');
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
        Schema::dropIfExists('spp_lists');
    }
}
