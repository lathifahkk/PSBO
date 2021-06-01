<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableMhs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mhss', function (Blueprint $table) {      
            $table->primary('nim')->unique();
            $table->string('departemen');
            
            $table->unsignedBigInteger('id_userrr');
            $table->foreign('id_userrr')
                ->references('id_user')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mhss');
    }
}
