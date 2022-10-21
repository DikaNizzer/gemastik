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
        Schema::create('dosens', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('NIP');
            $table->string('NAMA_DOSEN', 100);
            $table->string('EMAIL_DOSEN', 50)->nullable()->default(null);
            $table->string('NO_TLP_DOSEN')->nullable()->default(null);
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
        Schema::dropIfExists('dosens');
    }
};
