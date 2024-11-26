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
        Schema::create('bangunans', function (Blueprint $table) {
            $table->id();
            $table->biginteger('id_project')->unsigned();
                    //foreign
                    $table->foreign('id_project')
                    ->references('id')
                    ->on('projects');
            $table->biginteger('id_siteplan')->unsigned();
                    //foreign
                    $table->foreign('id_siteplan')
                    ->references('id')
                    ->on('siteplans');
            $table->biginteger('id_konsumen')->unsigned();
                    //foreign
                    $table->foreign('id_konsumen')
                    ->references('id')
                    ->on('konsumens');
            $table->string('tgl_pembelian');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bangunans');
    }
};
