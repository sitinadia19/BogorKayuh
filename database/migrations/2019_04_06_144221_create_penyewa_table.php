<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenyewaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyewaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_penyewaan');
            $table->time('waktu_mulai');
            $table->time('waktu_maks');
            $table->time('durasi');
            $table->integer('jumlahs');
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
        Schema::dropIfExists('penyewa');
    }
}
