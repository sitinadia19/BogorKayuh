<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenyewaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyewaans', function (Blueprint $table) {
            $table->string('id_penyewaan',191);
            $table->time('waktu_mulai');
            $table->time('waktu_maks');
            $table->time('waktu_now');
            $table->time('durasi');
            $table->integer('jumlah');
            
            $table->timestamps();
            
            
            $table->primary('id_penyewaan');
            
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penyewaans');
    }
}
