<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment_names', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
        DB::table('equipment_names')->insert(array('name'=>'Код оборудования'));
        DB::table('equipment_names')->insert(array('name'=>'Обезличенный код'));
        DB::table('equipment_names')->insert(array('name'=>'Id по бухгалтерии'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipment_names');
    }
}
