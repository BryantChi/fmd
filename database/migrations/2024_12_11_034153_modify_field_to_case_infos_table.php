<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyFieldToCaseInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('case_infos', function (Blueprint $table) {
            //
            $table->dropColumn('occupation');
            $table->longText('case_front_image')->nullable()->after('id')->comment('封面圖');
            $table->string('category')->nullable()->after('name')->comment('類別');
            $table->unsignedBigInteger('case_pv')->default(0)->after('case_content')->comment('瀏覽次數');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('case_infos', function (Blueprint $table) {
            //
            $table->dropColumn('case_front_image');
            $table->dropColumn('category');
            $table->dropColumn('case_pv');
            $table->string('occupation')->nullable()->after('name')->comment('職業');
        });
    }
}
