<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferVersionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_versions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('offer_id')->index()->default(0);
            $table->integer('version')->index()->default(0);
            $table->string('name')->default();
            $table->integer('okv_id');
            $table->double('nds',4,2)->default(18);
            $table->integer('deliveryshift')->default(0);
            $table->integer('delivery_id')->default(0);
            $

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
        Schema::dropIfExists('offer_versions');
    }
}
