<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSepedasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sepedas', function (Blueprint $table) {
            $table->integer('no_sepeda');
            $table->string('jenis',255);
            $table->string('jumlah',255);
            $table->timestamps();
            $table->primary('no_sepeda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sepedas');
    }
}
