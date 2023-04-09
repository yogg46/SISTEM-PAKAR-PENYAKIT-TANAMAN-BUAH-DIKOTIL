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
        Schema::create('detail_diagnosas', function (Blueprint $table) {
            $table->id();
            $table->string('key')->nullable();
            $table->unsignedBigInteger('idDiagnosa');
            $table->foreign('idDiagnosa')->references('id')->on('diagnosas');
            $table->unsignedBigInteger('idDetailPenyakit');
            $table->foreign('idDetailPenyakit')->references('id')->on('detail_penyakits');
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
        Schema::dropIfExists('detail_diagnosas');
    }
};
