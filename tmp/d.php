    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->increments('Id'); // id INT AUTO_INCREMENT 
            $table->string('User_id',100); // Varchar 100 принадлежность пользователю
            $table->string('Department',100); // Varchar 100 принадлежность к разделу
            $table->string('Title',100); // Varchar 100 заголовок
            $table->text('Description'); //text описаание
            $table->float('Price'); //double(100,2) цена
            $table->string('Metadata',100); // Varchar 100 просто поле - вдруг понадобится
            $table->string('Img',255);//Varchar 100 изображение
            $table->timestamps();
        });
    }
