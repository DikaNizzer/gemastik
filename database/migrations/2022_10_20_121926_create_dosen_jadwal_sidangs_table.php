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
        Schema::create('dosen_jadwal_sidangs', function (Blueprint $table) {
            $table->string('NIP');
            $table->increments('ID_SIDANG');
            $table->char('NILAI', 2);
            $table->timestamp('CREATED_AT');
            $table->timestamp('UPDATED_AT')->nullable()->default(null);
            $table->timestamp('DELETE_AT')->nullable()->default(null);

            $table->index(["NIP"], 'RELATIONSHIP_6_FK');

            $table->index(["ID_SIDANG"], 'RELATIONSHIP_7_FK');


            $table->foreign('NIP', 'dosen_jadwalsidang_NIP')
                ->references('NIP')->on('dosens')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            $table->foreign('ID_SIDANG', 'RELATIONSHIP_7_FK')
                ->references('ID_SIDANG')->on('jadwal_sidangs')
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
        Schema::dropIfExists('dosen_jadwal_sidangs');
    }
};
