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
         DB::table('test')->insert([
             'title' => str_random(10),
             'text' => str_random(10).'@gmail.com',
             'price' => ('13'),
             'img' => ('testurl.png'),
             'alias' => ('alias'),
         ]);
     }
 }
