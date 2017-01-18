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
            $table->string('html')
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
        DB::table('price_types')->insert(array('name'=>'Стоимость для нас'));
        DB::table('price_types')->insert(array('name'=>'Стоимость по бухгалтерии'));
        DB::table('price_types')->insert(array('name'=>'Стоимость производителя'));
        DB::table('price_types')->insert(array('name'=>'Стоимость для ОЕМ компаний'));
        DB::table('price_types')->insert(array('name'=>'Рекомендуемая стоимость продажи'));
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
