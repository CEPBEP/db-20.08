<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {

    //$table->engine = 'inno-db'; Варианты

            $table->increments('id'); // id INT AUTO_INCREMENT
            $table->string('Название',100); // Varchar 100
            $table->text('Описание'); //text
            $table->float('Цена'); //double(100,2)
            $table->string('metadata',100); // Varchar 100
            $table->string('img',255);//Varchar 100
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
////////////
