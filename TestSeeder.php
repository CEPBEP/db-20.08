<?php

use Illuminate\Database\Seeder;
use App\Test;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         DB::table('разделы')->insert([
             'title' => 'Строка Названия',//str_random(10),
             'text' => 'Текстовое Описание',// str_random(10),
             'price' => ('22215'),
             'img' => ('testurl.png'),
             'metadata' => ('wtf ?'),
         ]);
     }
 }
