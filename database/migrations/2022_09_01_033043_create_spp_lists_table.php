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
            $table->string('nama_pemabayaran');
            $table->string('range_awal');
            $table->string('range_akhir');
            $table->integer('nominal_default');
            $table->json('nominal_per_bulan');
            $table->integer('status');
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
