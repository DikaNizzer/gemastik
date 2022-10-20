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
        Schema::create('bimbingan', function (Blueprint $table) {
            $table->increments('ID_BIMBNIGAN');
            $table->integer('ta_ID_TA');
            $table->date('TGL_BIMBINGAN');
            $table->string('KETERANGAN')->nullable()->default(null);
            $table->string('kartu', 100)->nullable()->default('null');
            $table->timestamp('CREATED_AT');
            $table->timestamp('UPDATED_AT')->nullable()->default(null);
            $table->timestamp('DELETED_AT')->nullable()->default(null);

            $table->unique(["ID_BIMBNIGAN"], 'BIMBINGAN_PK');

            $table->index(["ta_ID_TA"], 'MENDAPAT_FK');

            // $table->foreign('ta_ID_TA')->references('ID_TA')->on('tugas_akhirs')->onDelete('cascade');
            // $table->foreign('ta_ID_TA', 'MENDAPAT_FK')
            //     ->references('ID_TA')->on('tugas_akhirs')
            //     ->onDelete('restrict')
            //     ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bimbingan');
    }
};
