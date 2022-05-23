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
        Schema::create('lapangan', function (Blueprint $table) {
            $table->string("kode_lapangan")->primary();
            $table->string("kode_arena");
            $table->string("nama_lapangan");
            $table->string("alas_lapangan");
            $table->string("foto")->nullable();
            $table->double("harga");
            $table->enum("status", ["1", "0"])->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lapangan');
    }
};
