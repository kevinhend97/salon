<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKonfirmasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('konfirmasi', function (Blueprint $table) {
            $table->increments('id_konfirmasi');
            $table->string('kode_pemesanan', 5);
            $table->integer('id_pelanggan')->unsigned();
            $table->integer('id_paket')->unsigned();
            $table->timestamps();

            Schema::enableForeignKeyConstraints();
            $table->foreign('id_pelanggan')
                    ->references('id_pelanggan')->on('pelanggan')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreign('id_paket')
                    ->references('id_paket')->on('paket')
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
        Schema::dropIfExists('konfirmasi');
        Schema::disableForeignKeyConstraints();   
    }
}
