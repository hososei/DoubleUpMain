<html>
  <head lang="ja">
    <meta http-equiv="Content-Type" content="text/html; charset=utf8">
    <title>ダブルアップゲーム</title>
  </head>
  <body bgcolor="#FFDDDD">
    <!-- ランダムに二枚のカードを抽出し片方は表、片方は裏として画像を表示する -->
    <?php
    //ランダムにカードを選択する関数
    function randomNumber($min,$max){
      $num = mt_rand($min,$max);
      return $num;
    }
    $openCard = 0;
    $closeCard = 0;
    $openCard = randomNumber(1,52);
    $closeCard = randomNumber(1,52);
    echo "$openCard";
    echo "$closeCard";
    ?>
    <!-- 上の関数でランダムに選んだ画像の表示 -->
    <img src="css/c1.png">
    <img src="css/<?php echo "$closeCard"; ?>.png">
    <form action="DoubleUpResult.php">
      <input type="submit" value="up">
      <input type="submit" value="down">
    </form>
  </body>
</html>
