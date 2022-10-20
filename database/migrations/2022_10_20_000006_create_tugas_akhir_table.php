<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTugasAkhirTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'tugas_akhir';

    /**
     * Run the migrations.
     * @table tugas_akhir
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
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
                ->references('NIM')->on('mahasiswa')
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
        Schema::dropIfExists($this->tableName);
    }
}
