<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('kota_kab_id');
            $table->foreignId('pekerjaan_id');
            $table->date('tgl_lahir');
            $table->string('nama');
            $table->string('gelar_depan')->nullable();
            $table->string('gelar_belakang')->nullable();
            $table->string('tempat_lahir');
            $table->string('golongan_darah');
            $table->string('no_hp');
            $table->string('alamat');
            $table->string('jabatan')->nullable();
            $table->string('eselon')->nullable();
            $table->string('pangkat')->nullable();
            $table->string('golongan')->nullable();
            $table->string('organisasi_institusi');
            $table->string('unit_kerja');
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
        Schema::dropIfExists('user_details');
    }
}
