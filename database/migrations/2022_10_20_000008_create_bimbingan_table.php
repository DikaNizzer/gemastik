<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBimbinganTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'bimbingan';

    /**
     * Run the migrations.
     * @table bimbingan
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID_BIMBNIGAN');
            $table->integer('ta_ID_TA');
            $table->date('TGL_BIMBINGAN');
            $table->string('KETERANGAN')->nullable()->default(null);
            $table->string('kartu', 100)->nullable()->default('null');
            $table->timestamp('CREATED_AT')->default('CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()');
            $table->timestamp('UPDATED_AT')->nullable()->default(null);
            $table->timestamp('DELETED_AT')->nullable()->default(null);

            $table->unique(["ID_BIMBNIGAN"], 'BIMBINGAN_PK');

            $table->index(["ta_ID_TA"], 'MENDAPAT_FK');


            $table->foreign('ta_ID_TA', 'MENDAPAT_FK')
                ->references('ID_TA')->on('tugas_akhir')
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
