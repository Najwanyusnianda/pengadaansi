<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermintaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permintaans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_bagian')->nullable();
            $table->string('nomor_form');
            $table->string('kode_kegiatan');
            $table->string('output');
            $table->string('komponen');
            $table->string('sub_komponen');
            $table->string('grup_akun');
            $table->string('judul');
            $table->string('jenis_pengadaan');
            $table->integer('anggaran');
            $table->date('date_mulai');
            $table->date('date_selesai');
            $table->date('date_created_form');
            $table->string('disposisi_status')->default('baru');
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
        Schema::dropIfExists('permintaans');
    }
}
