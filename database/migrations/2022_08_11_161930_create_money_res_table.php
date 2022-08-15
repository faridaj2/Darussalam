<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoneyResTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('money_res', function (Blueprint $table) {
            $table->id();
            $table->foreignId('md_list_id');
            $table->integer('uang_masuk')->nullable();
            $table->integer('uang_keluar')->nullable();
            $table->integer('uang_total')->nullable();
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
        Schema::dropIfExists('money_res');
    }
}
