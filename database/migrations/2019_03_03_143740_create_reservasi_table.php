<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservasi', function (Blueprint $table) {
            $table->increments('id_reservasi');
            $table->integer('id_paket')->unsigned();
            $table->string('nama_pemesan', 50);
            $table->text('alamat');
            $table->string('handphone', 20);
            $table->string('tanggal_reservasi', 20);
            $table->string('jam_reservasi', 8);
            $table->enum('status', ['Belum Dikonfirmasi', 'Sudah Dikonfirmasi']);
            $table->timestamps();

            Schema::enableForeignKeyConstraints();

            $table->foreign('id_paket')
                ->references('id_paket')
                ->on('paket')
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
        Schema::dropIfExists('reservasi');
        Schema::disableForeignKeyConstraints();
    }
}
