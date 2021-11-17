<html>
  <head lang="ja">
    <meta http-equiv="Content-Type" content="text/html; charset=utf8">
    <title>ダブルアップゲーム</title>
  </head>
  <body bgcolor="#008000">
    <h1><p style="color:red">ダブルアップゲーム</h1><br>
    </p>
    <?php
    require_once 'function.php';
    //前述の選択を表示
    $choice=$_GET['choice'];
    $closeCard=$_GET["closeCard"];
    $openCard=$_GET["openCard"];
    $totalScore=$_GET["totalScore"];
    ?>
    <img src="css/<?php echo "$closeCard"; ?>.png">
    <img src="css/<?php echo "$openCard"; ?>.png">
    <?php
    echo "<br>";
    //デバック用の下記二行
    //echo numberJudge($closeCard);echo "<br>";
    //echo numberJudge($openCard);echo "<br>";
    //スコア判定を作成すること
    switch($choice){
      case 'up':
        if(numberJudge($openCard)<numberJudge($closeCard)){
          echo "あたり";
          $totalScore+=numberDifference(numberJudge($openCard),numberJudge($closeCard));
        }elseif(numberJudge($openCard)==numberJudge($closeCard)){
          echo "同値";
        }else{
          echo "はずれ";
          $totalScore=0;
        }
        break;
      case 'down':
        if(numberJudge($openCard)>numberJudge($closeCard)){
          echo "あたり";
          $totalScore+=numberDifference(numberJudge($openCard),numberJudge($closeCard));
        }elseif(numberJudge($openCard)==numberJudge($closeCard)){
          echo "同値";
        }else{
          echo "はずれ";
          $totalScore=0;
        }
        break;
      default :
        print "error";
        break;
      }
    ?>
    あなたの今の通算スコアは<span style="color:red"><?php echo $totalScore; ?></span>です<br>
    <form action="DoubleUpChoice.php">
      <input type="submit" value="続行">
      <input type="hidden" value=<?php echo $totalScore; ?> name="totalScore">
    </form>
    <form action="DoubleUpTop.php">
      <input type="submit" value="ゲームを終了しスコアを確定する">
      <input type="hidden" value=<?php echo $totalScore; ?> name="highestScore">
    </form>
  </body>
</html>
