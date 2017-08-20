<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('разделы', function (Blueprint $table) {
            $table->increments('id'); // id INT AUTO_INCREMENT
            $table->string('title',100); // Varchar 100
            $table->text('text'); //text
            $table->float('price'); //double(100,2)
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
         Schema::drop('разделы'); //DROP TABLE `разделы`;
     }
 }
////////////
