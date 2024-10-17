<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <title>PHP課題7</title>
  </head>

  <body>
    <p>
      <?php
        //連想配列を代入
        $product_data = ['name' => 'onion', 'price' => 200, 'weight' => 160];
        
        //連想配列を出力
        print_r($product_data);
      ?>
    </p>
  </body>

</html>