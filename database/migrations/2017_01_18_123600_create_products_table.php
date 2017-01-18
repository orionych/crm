<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default();
            $table->string('stockname')->default();
            $table->integer('firm_id')->default(0);
            $table->integer('request_type_id')->default(0);
            $table->double('discount',5,2)->default(0);
            $table->text('text');
            $table->integer('okei_id')->default(796);
            $table->double('bordersize')->default(0);
            $table->double('dimx',6,3)->default(0);
            $table->double('dimy',6,3)->default(0);
            $table->double('dimz',6,3)->default(0);
            $table->double('weight',8,2)->default(0);
            $table->double('places',8,2)->default(0);
            $table->boolean('option')->default(false);
            $table->boolean('disabled');
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
            Schema::dropIfExists('products');
    }
}
