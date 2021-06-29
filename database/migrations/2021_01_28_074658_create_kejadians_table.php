<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKejadiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kejadians', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_kejadian');
            $table->string('nis');
            $table->string('nama');
            $table->string('kode_kasus');
            $table->string('nama_kasus');
            $table->string('poin');
            $table->string('tanggal');
            $table->string('saksi');
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
        Schema::dropIfExists('kejadians');
    }
}
