<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOkvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('okvs', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name')->default();
            $table->string('code')->default();
            $table->string('internationalname')->default();
            $table->string('html')->default();
        });
        DB::table('okvs')->insert(array(643,'Рубль','RUB','rouble','&#8381;'));
        DB::table('okvs')->insert(array(978,'Евро','EUR','euro','&euro;'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('okvs');
    }
}
