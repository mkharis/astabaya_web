<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel', function (Blueprint $table) {
            $table->id();
            $table->string('tabel');
            $table->string('link');
            $table->bigInteger('sub_kategori_id')->unsigned();

            $table->foreign('sub_kategori_id')->references('id')->on('sub_kategori')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabels');
    }
}
