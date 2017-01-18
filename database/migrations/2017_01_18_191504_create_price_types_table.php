<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePriceTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default();
            $table->string('html')->default();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
        DB::table('price_types')->insert(array('name'=>'Стоимость для нас','html'=>'!'));
        DB::table('price_types')->insert(array('name'=>'Стоимость по бухгалтерии','html'=>'бух.'));
        DB::table('price_types')->insert(array('name'=>'Стоимость производителя','html'=>'произв.'));
        DB::table('price_types')->insert(array('name'=>'Стоимость для ОЕМ компаний','html'=>'OEM'));
        DB::table('price_types')->insert(array('name'=>'Рекомендуемая стоимость продажи','html'=>'$'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('price_types');
    }
}