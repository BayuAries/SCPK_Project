<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBayiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bayi', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('ortu_id');
            $table->integer('usia');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            //$table->foreign('id_ortu')->references('id')->on('ortu');
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
        Schema::dropIfExists('bayi');
    }
}
