<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserCommunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_communities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('divisi_koordinator_id')->nullable();
            $table->tinyInteger('aktif_alumni');
            $table->tinyInteger('aktif_mentor');
            $table->text('kontribusi')->nullable();
            $table->text('kerja_sama')->nullable();
            $table->text('usul_saran')->nullable();
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
        Schema::dropIfExists('user_communities');
    }
}
