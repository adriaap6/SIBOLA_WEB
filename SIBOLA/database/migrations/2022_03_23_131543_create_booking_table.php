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
        Schema::create('booking', function (Blueprint $table) {
            $table->string("kode_booking")->primary();
            $table->integer("id_users_booking");
            $table->string("kode_arena");
            $table->string("kode_lapangan");
            $table->string("nama_arena");
            $table->date("tgl_booking");
            $table->double("harga");
            $table->integer("id_petugas");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking');
    }
};
