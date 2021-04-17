<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTantanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tantangan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tema_tantangan')->nullable();
            $table->string('judul_tantangan')->nullable();
            $table->string('deskripsi_tantangan')->nullable();
            $table->text('contoh_foto')->nullable();
            $table->string('tenggat_waktu');
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
        Schema::drop('materi');
    }
}