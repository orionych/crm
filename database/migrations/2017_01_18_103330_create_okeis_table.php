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
            $table->primary('id');
            $table->string('name')->dafault();
            $table->string('shortname')->default();
            $table->string('html')->default();
        });
        DB::table('okeis')->insert(array(796,'Штук','шт.','шт.'),array(796,'Штук','шт.','шт.'))
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
