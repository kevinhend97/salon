<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPaketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_paket', function (Blueprint $table) {
            $table->increments('id_detail_paket');
            $table->integer('id_paket')->unsigned();
            $table->integer('id_layanan')->unsigned();
            $table->timestamps();

            Schema::enableForeignKeyConstraints();

            $table->foreign('id_paket')
                ->references('id_paket')->on('paket')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_layanan')
                ->references('id_layanan')->on('layanan')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_paket');
        Schema::disableForeignKeyConstraints();   
    }
}
