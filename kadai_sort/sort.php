<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <title>PHP課題ソート</title>
  </head>

  <body>
    <p>
      <?php
        //ソートする配列の宣言
        $nums = [15, 4, 18, 23, 10];

        function sort_2way ($array, $order){
          if($order){
            echo '昇順にソートします。<br>';
            sort($array);
            foreach($array as $num){
              echo $num.'<br>';
            }
          } else {
            echo '降順にソートします。<br>';
            rsort($array);
            foreach($array as $num){
              echo $num.'<br>';
            }
          }
        }

        sort_2way($nums, TRUE);
        sort_2way($nums, FALSE);
      ?>
    </p>
  </body>

</html>