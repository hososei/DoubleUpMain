<html>
  <head lang="ja">
    <meta http-equiv="Content-Type" content="text/html; charset=utf8">
    <title>ダブルアップゲーム</title>
  </head>
  <body bgcolor="#008000">
    <h1><p style="color:red">ダブルアップゲーム</h1><br>
      ダブルアップゲームの説明<br>
      最初に二枚のカードが提示されます。<br>
      その二枚のカードのうち左のカードは伏せられており、右のカードは明かされています。<br>
      左に提示されているカードが右のカードより高い数字か低い数字かを予測するゲームです。<br>
      小さい順から A.2.3.4.5.6.7.8.9.10.J.Q.K といった高さで並んでいます。<br>
      なるべく高いスコアを目指して頑張ってみましょう。<br>
    </p>
    <?php
      $totalScore=0;
     ?>
     <h2>最高スコア</h2><br>
     <p style="color:red"><?php echo "$highestScore"; ?></p>
  </body>
  <form action="DoubleUpChoice.php">
    <input type="submit" value="ゲームを開始しますか？">
    <input type="hidden" value=<?php echo $totalScore; ?> name="totalScore">
  </form>
</html>
