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
        Schema::create('jadwal_sidangs', function (Blueprint $table) {
            $table->increments('ID_SIDANG');
            $table->char('mahasiswa_NIM', 12);
            $table->dateTime('WAKTU_SIDANG');
            $table->smallInteger('STATUS_SIDANG');
            $table->string('DOSEN_PENGUJI', 100);
            $table->timestamp('CREATED_AT')->nullable()->default(null);
            $table->timestamp('UPDATED_AT')->nullable()->default(null);
            $table->timestamp('DELETED_AT')->nullable()->default(null);

            $table->unique(["ID_SIDANG"], 'JADWALSIDANG_PK');

            $table->index(["mahasiswa_NIM"], 'MENGIKUTI_FK');


            $table->foreign('mahasiswa_NIM', 'MENGIKUTI_FK')
                ->references('NIM')->on('mahasiswas')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal_sidangs');
    }
};
