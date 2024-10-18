<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <title>PHP課題11</title>
  </head>

  <body>
    <p>
      <?php
        //連想配列を代入
        $product_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
        
        //連想配列を出力
        foreach($product_data as $key => $value){
          echo "{$key}:{$value}<br>";
        }
      ?>
    </p>
  </body>

</html>