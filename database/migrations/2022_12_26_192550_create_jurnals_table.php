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
        Schema::create('jurnals', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('deskripsi');
            $table->string('foto');
            $table->boolean('pembimbing_validated'); // 1: validated, 0: not validated
            $table->boolean('dudi_validated'); // 1: validated, 0: not validated
            $table->unsignedBigInteger('siswa_id');
            $table->timestamps();

            $table->foreign('siswa_id')->references('id')->on('siswas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jurnals');
    }
};
