<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('разделы', function (Blueprint $table) {
           $table ->string('что-то новенькое',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('разделы', function (Blueprint $table) {
           $table->dropColumn('что-то новенькое'); //
        });
    }
}?>
