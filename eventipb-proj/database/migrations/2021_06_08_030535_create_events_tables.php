<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
           
            $table->string('nama_event');
            $table->date('tanggal_pelaksanaan');
            $table->time('waktu_pelaksanaan');
            $table->string('lokasi');
            $table->string('deskripsi');
            $table->string('kategori');
            $table->integer('jumlah_tiket');
            $table->mediumText('poster');
            $table->string('nama_organisasi');
            
            // $table->unsignedBigInteger('id_org');
            // $table->foreign('id_org')
            //     ->references('id')
            //     ->on('organisasis');

            // $table->foreign('nama_user')->references('nama_user')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
