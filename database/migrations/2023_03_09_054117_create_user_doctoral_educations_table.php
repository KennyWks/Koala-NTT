<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDoctoralEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_doctoral_educations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('negara_kuliah_id')->nullable();
            $table->string('sponsor')->nullable();
            $table->string('jurusan_disiplin')->nullable();
            $table->string('kompetensi_spesialisasi')->nullable();
            $table->string('perguruan_tinggi')->nullable();
            $table->string('link_karya_tulis')->nullable();
            $table->string('tahun_lulus', 4)->nullable();
            $table->string('gelar')->nullable();
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
        Schema::dropIfExists('user_doctoral_educations');
    }
}
