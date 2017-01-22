<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('equipments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default();
            $table->string('stockname')->default();
            $table->integer('firm_id')->default(0);
            $table->integer('product_id')->default(0);
            $table->double('discount',5,2)->default(0);
            $table->text('text');
            $table->integer('okei_id')->default(796);
            $table->boolean('option')->default(false);
            $table->boolean('disabled')->default(false);
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
            Schema::dropIfExists('equipments');
    }
}
