<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToTin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tin', function (Blueprint $table) {
            $table->string("url_anh");
            $table->integer("tin_noi_bat");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tin', function (Blueprint $table) {
            Schema::dropColumn('url_anh');
            Schema::dropColumn('tin_noi_bat');
        });
    }
}
