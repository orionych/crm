<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOkvedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('okveds', function (Blueprint $table) {
            $table->integer('sector')->index()->default(0);
            $table->integer('subsector')->default(0);
            $table->integer('suffix')->default(0);
            $table->string('name')->default();
            $table->boolean('enabled')->default(false);
            $table->primary(['sector','subsector','suffix'],'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('okveds');
    }
}
