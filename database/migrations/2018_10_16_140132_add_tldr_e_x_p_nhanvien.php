<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTldrEXPNhanvien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nhanviens', function (Blueprint $table) {
            $table->string('kinhnghiem_tomtat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nhanviens', function (Blueprint $table) {
            //
            $table->dropColumn('kinhnghiem_tomtat');
        });
    }
}
