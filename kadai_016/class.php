<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <title>PHP課題16</title>
  </head>

  <body>
    <p>
      <?php
        //クラスを定義
        class Food{
          //コンストラクタを定義
          public function __construct(string $name, int $price){
            $this->name =$name;
            $this->price =$price;
          }
          //プロパティを定義
          public $name;
          public $price;
          //メソッドを定義
          public function show_price(){
              echo $this->price;
          }
        }

        //クラスを定義
        class Animal{
          //コンストラクタを定義
          public function __construct(string $name, int $height, int $weight){
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
          }
          //プロパティを定義
          public $name;
          public $height;
          public $weight;
          //メソッドを定義
          public function show_height(){
              echo $this->height;
          }
        }

        //インスタンス化する
        $food = new Food('pumpkin', 500);
        $animal = new Animal('cat', 50, 6000);

        //インスタンスの各プロパティを出力する
        print_r($food);
        echo '<br>';
        print_r($animal);
        echo '<br>';

        //メソッドへアクセス
        echo $food-> name;
        echo '<br>';
        echo $animal-> height; 
      ?>
    </p>
  </body>

</html>