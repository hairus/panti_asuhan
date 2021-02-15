<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('ttl');
            $table->string('alamat');
            $table->string('jenis_kelamin');
            $table->string('sekolah');
            $table->string('orang_tua_laki_kandung');
            $table->unsignedBigInteger('status_laki');
            $table->foreign('status_laki')->references('id')->on('hidup_matis')->onDelete('cascade');
            $table->string('orang_tua_laki_tiri');
            $table->unsignedBigInteger('status_laki_tiri');
            $table->foreign('status_laki_tiri')->references('id')->on('hidup_matis')->onDelete('cascade');
            $table->string('orang_tua_perempuan');
            $table->unsignedBigInteger('status_perempuan');
            $table->foreign('status_perempuan')->references('id')->on('hidup_matis')->onDelete('cascade');
            $table->string('orang_tua_perempuan_tiri');
            $table->unsignedBigInteger('status_perempuan_tiri');
            $table->foreign('status_perempuan_tiri')->references('id')->on('hidup_matis')->onDelete('cascade');
            $table->string('wali_orangTua_angkat');
            $table->unsignedBigInteger('status_wali_orangTua_angkat');
            $table->foreign('status_wali_orangTua_angkat')->references('id')->on('hidup_matis')->onDelete('cascade');
            $table->text('riwayat_penyakit');
            $table->integer('hp');
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
        Schema::dropIfExists('biodata_users');
    }
}
