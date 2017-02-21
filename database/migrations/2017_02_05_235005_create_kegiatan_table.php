<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKegiatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('kegiatan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kegiatan');
            $table->string('jenis_kegiatan');
            $table->date('tanggal_kegiatan');
            $table->date('tanggal');
            $table->string('deskripsi_kegiatan');
            $table->rememberToken();
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
        Schema::dropIfExists('kegiatan');
    }
}
