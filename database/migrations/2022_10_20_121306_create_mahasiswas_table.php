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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->string('NIM');
            $table->string('dosen_NIP');
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
                ->references('NIP')->on('dosens')
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
        Schema::dropIfExists('mahasiswas');
    }
};
