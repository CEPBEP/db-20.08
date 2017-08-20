<?php

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
         DB::table('разделы')->insert([
             'Название' => 'Строка Названия',  //str_random(10),
             'Описание' => 'Текстовое Описание',// str_random(10),
             'Цена' => ('12215'),
             'img' => ('testurl.png'),
             'metadata' => ('wtf ?'),
         ]);

         //*//////////////////////////////////////////////////

         Test::create([                    //создание через класс (model:App/Test.php)
            'Название' => 'Строка Названия',  //str_random(10),
            'Описание' => 'Текстовое Описание',// str_random(10),
            'Цена' => ('12215'),
            'img' => ('testurl.png'),
            'metadata' => ('wtf ?'),
        ]);                               // */
    

     {
         DB::table('разделы')->insert([
             'Название' => 'Строка Названия',  //str_random(10),
             'Описание' => 'Текстовое Описание',// str_random(10),
             'Цена' => ('22215'),
             'img' => ('testurl.png'),
             'metadata' => ('wtf ?'),
         ]);

         //*//////////////////////////////////////////////////

         Test::create([                    //создание через класс (model:App/Test.php)
            'Название' => 'Строка Названия',  //str_random(10),
            'Описание' => 'Текстовое Описание',// str_random(10),
            'Цена' => ('22215'),
            'img' => ('testurl.png'),
            'metadata' => ('wtf ?'),
        ]);                               // */
     }
    
    }
}
/////
