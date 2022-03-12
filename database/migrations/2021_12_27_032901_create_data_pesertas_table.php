<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pesertas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('no_pendaftaran')->nullable();
            $table->date('tgl_daftar')->nullable();
            $table->string('jk');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('agama');
            $table->string('asal_provinsi');
            $table->string('asal_kab_kota');
            $table->string('asal_desa_kelurahan');
            $table->string('alamat');
            $table->Integer('kode_pos');
            $table->string('jurusan');
            $table->string('nama_ortu');
            $table->string('pekerjaan_ortu');
            $table->bigInteger('no_hp_ortu');
            $table->string('alamat_ortu');
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
        Schema::dropIfExists('data_pesertas');
    }
}
