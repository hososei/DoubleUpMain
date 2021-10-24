<html>
  <head lang="ja">
    <meta http-equiv="Content-Type" content="text/html; charset=utf8">
    <title>ダブルアップゲーム</title>
  </head>
  <body bgcolor="#FFDDDD">
    <!-- ランダムに二枚のカードを抽出し片方は表、片方は裏として画像を表示する -->
    <?php
    //ランダムにカードを選択する関数
    $min = 1;
    $max = 52;
    $openCard = 0;
    $closeCard = 0;
    openCard = mt-rand($min,$max);
    closeCard = mt-rand($min,$max);
    echo "openCard";
    echo "closeCard";
    ?>
    <!-- 上の関数でランダムに選んだ画像の表示 -->
    <form>
      <input type="submit" value="up">
      <input type="submit" value="down">
    </form>
  </body>
</html>
