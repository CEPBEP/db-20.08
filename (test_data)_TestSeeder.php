<?php

use Illuminate\Database\Seeder;
use App\Test;

      /////////////////////////////////////////////////////////////

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         DB::table('разделы')->insert([                        // создать таблицу 
             'title' => 'Строка Названия',  //str_random(10),  //заголовок позиции
             'text' => 'Текстовое Описание',// str_random(10), //описание позиции
             'price' => ('22215'),
             'img' => ('testurl.png'),
             'metadata' => ('wtf ?'),
         ]);

         //*//////////////////////////////////////////////////

         Test::create([                    //создание через класс (model:App/Test.php)
            'title' => 'Строка Названия',  //str_random(10),
            'text' => 'Текстовое Описание',// str_random(10),
            'price' => ('22215'),
            'img' => ('testurl.png'),
            'metadata' => ('wtf ?'),
        ]);                               // */
     }
 }
