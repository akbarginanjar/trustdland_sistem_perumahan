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
        Schema::create('siteplans', function (Blueprint $table) {
            $table->id();
            $table->biginteger('id_project')->unsigned();
                    //foreign
                    $table->foreign('id_project')
                    ->references('id')
                    ->on('projects');
            $table->string('kode');
            $table->string('luas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siteplans');
    }
};
