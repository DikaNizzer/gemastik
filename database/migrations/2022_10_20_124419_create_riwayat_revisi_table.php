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
        Schema::create('riwayat_revisi', function (Blueprint $table) {
            // $table->engine = 'InnoDB';
            $table->increments('ID_REVISI');
            $table->integer('ID_TA');
            $table->date('TANGGAL_REVISI');
            $table->mediumText('KETERANGAN_REVISI');
            $table->string('PEMBERI_REVISI', 100);
            $table->string('LAPORAN_TA', 100);
            $table->timestamp('CREATED_AT')->nullable()->default(null);
            $table->timestamp('UPDATE_AT')->nullable()->default(null);
            $table->timestamp('DELETED_AT')->nullable()->default(null);

            $table->unique(["ID_REVISI"], 'RIWAYAT_REVISI_PK');

            $table->index(["ID_TA"], 'FK_RIWAYAT__TERDIRI_A_TUGAS_AK');


            // $table->foreign('ID_TA', 'FK_RIWAYAT__TERDIRI_A_TUGAS_AK')
            //     ->references('id')->on('tugas_akhirs')
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
        Schema::dropIfExists('riwayat_revisi');
    }
};
