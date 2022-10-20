<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMahasiswaTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'mahasiswa';

    /**
     * Run the migrations.
     * @table mahasiswa
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('NIM');
            $table->char('dosen_NIP', 16);
            $table->string('NAMA_MHS', 100);
            $table->string('EMAIL_MHS', 50)->nullable()->default(null);
            $table->string('NO_TLP_MHS', 13)->nullable()->default(null);
            $table->string('ALAMAT_MHS', 100)->nullable()->default(null);
            $table->string('PASSWORD_MHS', 100);
            $table->timestamp('UPDATED_AT')->nullable()->default(null);
            $table->timestamp('CREATED_AT')->nullable()->default(null);
            $table->timestamp('DELETED_AT')->nullable()->default(null);

            $table->unique(["NIM"], 'MAHASISWA_PK');

            $table->index(["dosen_NIP"], 'MEMBIMBING_FK');


            $table->foreign('dosen_NIP', 'MEMBIMBING_FK')
                ->references('NIP')->on('dosen')
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
