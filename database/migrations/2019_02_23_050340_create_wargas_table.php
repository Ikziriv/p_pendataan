<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wargas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('nik_warga');
            $table->string('name');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('jk');
            $table->string('alamat');
            $table->string('desa_kelurahan');
            $table->string('kecamatan')->nullable();
            $table->string('kabutpaten')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('negara')->nullable();
            $table->string('rt')->nullable();
            $table->string('rw')->nullable();
            $table->string('agama')->nullable();
            $table->string('pendidikan_terakhir')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('status_perkawinan')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('wargas');
    }
}
