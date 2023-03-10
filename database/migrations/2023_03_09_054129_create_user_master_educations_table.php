<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMasterEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_master_educations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('negara_kuliah_id');
            $table->string('sponsor')->nullable();
            $table->string('jurusan_disiplin');
            $table->string('kompetensi_spesialisasi')->nullable();
            $table->string('perguruan_tinggi');
            $table->string('link_karya_tulis')->nullable();
            $table->string('tahun_lulus', 4);
            $table->string('gelar');
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
        Schema::dropIfExists('user_master_educations');
    }
}
