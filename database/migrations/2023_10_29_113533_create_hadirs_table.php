<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHadirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hadirs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_pekerja');
            $table->foreign('id_pekerja')
                  ->references('id')->on('pegawais')
                  ->onDelete('cascade')->onUpdate('cascade');
    
            $table->string('aktivitas');
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
        Schema::dropIfExists('hadirs');
    }
}
