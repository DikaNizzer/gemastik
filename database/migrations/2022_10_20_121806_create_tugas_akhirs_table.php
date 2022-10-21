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
        Schema::create('tugas_akhir', function (Blueprint $table) {
            $table->increments('ID_TA');
            $table->char('mahasiswa_NIM', 12);
            $table->string('JUDUL_TA', 100);
            $table->date('TGL_PENGAJUAN')->nullable()->default(null);
            $table->string('laporan_awal', 100)->nullable()->default(null);
            $table->string('LAPORAN_FINAL_TA', 100)->nullable()->default(null);
            $table->string('LEMBAR_PENGESAHAN', 100)->nullable()->default(null);
            $table->date('pengajuan_sidang')->nullable()->default(null);
            $table->smallInteger('STATUS_TA')->default('0');
            $table->timestamp('CREATED_AT')->nullable()->default(null);
            $table->timestamp('UPDATED_AT')->nullable()->default(null);
            $table->timestamp('DELETED_AT')->nullable()->default(null);

            $table->unique(["ID_TA"], 'TUGAS_AKHIR_PK');

            $table->index(["mahasiswa_NIM"], 'MENGERJAKAN_FK');


            $table->foreign('mahasiswa_NIM', 'MENGERJAKAN_FK')
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
        Schema::dropIfExists('tugas_akhirs');
    }
};
