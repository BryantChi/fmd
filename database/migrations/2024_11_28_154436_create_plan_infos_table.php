<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanInfosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('plan_name')->comment('方案名稱');
            $table->string('plan_sqm')->nullable()->comment('坪數');
            $table->longText('plan_style_1')->nullable()->comment('風格1');
            $table->longText('plan_style_2')->nullable()->comment('風格2');
            $table->longText('plan_style_3')->nullable()->comment('風格3');
            $table->longText('plan_style_4')->nullable()->comment('風格4');
            $table->bigInteger('plan_price')->default(0)->comment('價格');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('plan_infos');
    }
}
