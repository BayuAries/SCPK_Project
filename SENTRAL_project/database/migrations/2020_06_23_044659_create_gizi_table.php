<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiziTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gizi', function (Blueprint $table) {
            $table->id();
            $table->string('bayi_id');
            $table->float('berat_badan');
            $table->float('tinggi');
            $table->float('lingkar_kepala');
            $table->string('bb_u')->nullable();
            $table->float('hasil1')->nullable();
            $table->string('tb_u')->nullable();
            $table->float('hasil2')->nullable();
            $table->string('status_gizi')->nullable();
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
        Schema::dropIfExists('gizi');
    }
}
