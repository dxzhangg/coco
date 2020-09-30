<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommoditySkusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commodity_skus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('commodity_id');
            $table->string('title');
            $table->decimal('price', 10, 2);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('commodity_id')->references('id')->on('commodities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commodity_skus');
    }
}
