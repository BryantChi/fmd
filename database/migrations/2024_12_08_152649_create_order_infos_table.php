<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderInfosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_number')->unique();
            $table->string('name')->nullable()->comment('訂購人姓名');
            $table->string('phone')->nullable()->comment('聯絡電話');
            $table->text('email')->nullable()->comment('電子郵件');
            $table->string('city')->nullable()->comment('縣市');
            $table->string('district')->nullable()->comment('鄉鎮市區');
            $table->string('zipcode')->nullable()->comment('郵遞區號');
            $table->string('address')->nullable()->comment('地址');
            $table->string('payment_method')->nullable()->comment('付款方式');
            $table->enum('payment_status', ['pending', 'paid', 'failed'])->default('pending')->comment('支付狀態');
            $table->longText('payment_details')->nullable()->comment('支付詳情');
            $table->decimal('amount', 10, 2)->default(0)->comment('金額');
            $table->longText('order_details')->nullable()->comment('訂單詳情');
            $table->enum('order_status', ['pending', 'completed', 'canceled'])->default('pending')->comment('訂單狀態');
            $table->string('third_party_ref')->nullable()->comment('第三方支付回傳編號'); // 第三方支付回傳編號
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
        Schema::drop('order_infos');
    }
}
