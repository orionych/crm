<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOkeisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('okeis', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name')->dafault();
            $table->string('shortname')->default();
            $table->string('html')->default();
        });
        DB::table('okeis')->insert(array('id'=>796,'name'=>'Штук','shortname'=>'шт.','html'=>'шт.'),array('id'=>'18','name'=>'Погонный метр','shortname'=>'пог. м.','html'=>'пог. м.'),array('id'=>'839','name'=>'Комплект','shortname'=>'компл.','html'=>'компл.'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('okeis');
    }
}
