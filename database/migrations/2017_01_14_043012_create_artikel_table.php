<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtikelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul')->nullable();
            $table->text('content')->nullable();
            $table->text('foto')->nullable();
            $table->string('tanggal');
            $table->timestamps('tanggal_artikel');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('artikel');
    }
}
