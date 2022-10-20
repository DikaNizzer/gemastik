<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDosenJadwalsidangTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'dosen_jadwalsidang';

    /**
     * Run the migrations.
     * @table dosen_jadwalsidang
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('NIP');
            $table->integer('ID_SIDANG');
            $table->char('NILAI', 2);
            $table->timestamp('CREATED_AT')->default('CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP()');
            $table->timestamp('UPDATED_AT')->nullable()->default(null);
            $table->timestamp('DELETE_AT')->nullable()->default(null);

            $table->index(["NIP"], 'RELATIONSHIP_6_FK');

            $table->index(["ID_SIDANG"], 'RELATIONSHIP_7_FK');


            $table->foreign('NIP', 'dosen_jadwalsidang_NIP')
                ->references('NIP')->on('dosen')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('ID_SIDANG', 'RELATIONSHIP_7_FK')
                ->references('ID_SIDANG')->on('jadwalsidang')
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
