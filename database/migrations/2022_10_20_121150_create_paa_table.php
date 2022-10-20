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
        Schema::create('paa', function (Blueprint $table) {
            $table->increments('ID_PAA');
            $table->string('NAMA_PAA', 100);
            $table->string('EMAIL_PAA', 50)->nullable()->default(null);
            $table->integer('NO_TLP_PAA')->nullable()->default(null);
            $table->string('ALAMAT_PAA', 100)->nullable()->default(null);
            $table->string('PASSWORD', 100);
            $table->timestamp('UPDATED_AT')->nullable()->default(null);
            $table->timestamp('CREATED_AT')->nullable()->default(null);
            $table->timestamp('DELETED_AT')->nullable()->default(null);

            $table->unique(["ID_PAA"], 'PAA_PK');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paa');
    }
};
