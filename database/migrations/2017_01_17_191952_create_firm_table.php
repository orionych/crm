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
        Schema::create('firms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default();
            $table->string('fullname')->default();
            $table->integer('firm_type_id')->default(1);
            $table->boolean('competitor')->default(false);
            $table->boolean('supplier')->default(false);
            $table->integer('power')->default(0);            
            $table->integer('stars')->default(0);    
            $table->integer('city_id')->default(0);
            $table->integer('holding_id')->default(0);  
            $table->string('okved_id',10)->index()->default();
            $table->integer('fizlico')->default(0);          
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
            $table->string('bik')->default();
            $table->string('rasschet')->default();
            $table->string('korschet')->default();
            $table->string('bank')->default();
            $table->double('geox',17,4)->default(0);
            $table->double('geoy',17,4)->default(0);
            $table->boolean('closed')->default(false);
            $table->text('note');            
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('firms');
    }
}
