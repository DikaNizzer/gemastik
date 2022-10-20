<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalsidangTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'jadwalsidang';

    /**
     * Run the migrations.
     * @table jadwalsidang
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('ID_SIDANG');
            $table->char('mahasiswa_NIM', 12);
            $table->dateTime('WAKTU_SIDANG')->default('CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()');
            $table->smallInteger('STATUS_SIDANG');
            $table->string('DOSEN_PENGUJI', 100);
            $table->timestamp('CREATED_AT')->nullable()->default(null);
            $table->timestamp('UPDATED_AT')->nullable()->default(null);
            $table->timestamp('DELETED_AT')->nullable()->default(null);

            $table->unique(["ID_SIDANG"], 'JADWALSIDANG_PK');

            $table->index(["mahasiswa_NIM"], 'MENGIKUTI_FK');


            $table->foreign('mahasiswa_NIM', 'MENGIKUTI_FK')
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
