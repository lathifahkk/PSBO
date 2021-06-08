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
            $table->bigIncrements('id_event');
           
            $table->string('nama_event');
            $table->date('tanggal_pelaksanaan');
            $table->dateTimeTz('jam', $precision = 0);
            $table->timestamp('waktu_pendaftaran', $precision = 0);
            $table->string('lokasi');
            $table->multiLineString('deskripsi');
            $table->string('kategori');
            
            $table->unsignedBigInteger('id_org_ev');
            $table->foreign('id_org_ev')
                ->references('id_org')
                ->on('organisasis');

            $table->unsignedBigInteger('id_admin_ev');
            $table->foreign('id_admin_ev')->references('id_admin')->on('admins');
            // $table->image('status');

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
