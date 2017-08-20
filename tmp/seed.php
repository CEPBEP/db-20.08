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
     //
     //1
DB::insert('INSERT INTO `test` (`title`,`text`,`price`,`img`) VALUES (?,?,?,?)',
[
    'Title',
    'loren ipsum',
    '1 coin',
    'imageurl.svg',

]);

     //2
      DB::table('test')->insert(

        [
            [
                'title' => "Title",
                'text' => "lorem ipsum",
            ],

        ]


       );

    }

};
//3
Test::Create([

'title'=>'Title'


]);
