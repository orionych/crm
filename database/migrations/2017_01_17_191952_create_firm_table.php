<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('firms', function (Blueprint $table) {
            $table->string('name')->default();
            $table->string('fullname')->default();
            $table->string('okved')->default();
            $table->integer('power')->default(0);            
            $table->integer('stars')->default(0);    
            $table->integer('fizlico')->default(0);
            $table->integer('city_id')->default(0);
            $table->integer('holding_id')->default(0);            
            $table->string('inn')->default();        
            $table->string('kpp')->default();
            $table->string('ogrn')->default();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('firms', function (Blueprint $table) {
            //
        });
    }
}
