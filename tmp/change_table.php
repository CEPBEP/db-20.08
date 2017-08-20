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
        if(Schema::hasTable('tests')){                        //проверка таблицы

        Schema::table('tests', function (Blueprint $table){ //

            if(Schema::hasColumn('tests')){                   //проверка столбца

           $table ->string('new test',100);
        }

     });

   }

}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tests', function (Blueprint $table) {
           $table->dropColumn('new test'); //
        });
    }
}
//
