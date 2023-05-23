<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_perbaikans', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->unsignedBigInteger('id_peralatan');
            $table->unsignedBigInteger('id_user');
            $table->string('keterangan');
            $table->string('prioritas');
            $table->string('lokasi');
            $table->date('tanggal_pekerjaan');
            $table->string('status')->nullable();
            $table->unsignedBigInteger('id_teknisi')->nullable();
            $table->timestamps();

            $table->foreign('id_peralatan')->references('id')->on('peralatans')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_teknisi')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan_perbaikans');
    }
};
