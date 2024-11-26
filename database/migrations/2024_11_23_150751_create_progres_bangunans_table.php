<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('progres_bangunans', function (Blueprint $table) {
            $table->id();
            $table->biginteger('id_bangunan')->unsigned();
                    //foreign
                    $table->foreign('id_bangunan')
                    ->references('id')
                    ->on('bangunans');
            $table->string('video')->nullable();
            $table->string('foto')->nullable();
            $table->string('tgl_laporan');
            $table->string('waktu_laporan');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progres_bangunans');
    }
};
