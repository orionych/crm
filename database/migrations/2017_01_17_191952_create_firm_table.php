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
            $table->string('telephone')->default();
            $table->string('uraddress')->default();
            $table->string('faktaddress')->default();
            $table->string('director')->default();
            $table->string('director-r')->default();
            $table->string('director-position')->default();
            $table->string('osnovanie')->default();

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
