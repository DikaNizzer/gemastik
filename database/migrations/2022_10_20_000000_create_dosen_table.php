<?php

namespace Database\Migrations;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDosenTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'dosen';

    /**
     * Run the migrations.
     * @table dosen
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('NIP');
            $table->string('NAMA_DOSEN', 100);
            $table->string('EMAIL_DOSEN', 50)->nullable()->default(null);
            $table->integer('NO_TLP_DOSEN')->nullable()->default(null);
            $table->string('ALAMAT_DOSEN', 100)->nullable()->default(null);
            $table->string('PASSWORD_DOSEN', 100);
            $table->timestamp('UPDATED_AT')->nullable()->default(null);
            $table->timestamp('CREATED_AT')->nullable()->default(null);
            $table->timestamp('DELETED_AT')->nullable()->default(null);

            $table->unique(["NIP"], 'DOSEN_PK');
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
