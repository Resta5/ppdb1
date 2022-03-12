<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerkasPesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berkas_pesertas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_peserta')->unsigned();
            $table->string('ftcpy_ijazah')->nullable();
            $table->string('ftcpy_akte')->nullable();
            $table->string('ftcpy_kk')->nullable();
            $table->string('ftcpy_skhun')->nullable();
            $table->string('ftcpy_nilai_raport')->nullable();
            $table->foreign('id_peserta')->references('id')
                ->on('data_pesertas')->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('berkas_pesertas');
    }
}
