<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableItemPembayaran extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('item_pembayaran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('semester_id');
            $table->string('nama');
            $table->text('deskripsi');
            $table->integer('harga')->default(0);
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
        Schema::dropIfExists('item_pembayaran');
    }
}