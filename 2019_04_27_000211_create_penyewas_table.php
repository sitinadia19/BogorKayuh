<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenyewasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyewas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pengguna',255);
            $table->string('kata_sandi',255);
            $table->string('nama',255);
            $table->string('no_telepon',20);
            $table->string('email',255);
            $table->string('alamat',255);
            $table->string('id_sewa',191);
            $table->timestamps();
           
           
            

            $table->foreign('id_sewa')->references('id_penyewaan')->on('penyewaans');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penyewas');
    }
}
