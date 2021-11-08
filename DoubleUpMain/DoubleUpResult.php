<html>
  <head lang="ja">
    <meta http-equiv="Content-Type" content="text/html; charset=utf8">
    <title>ダブルアップゲーム</title>
  </head>
  <body bgcolor="#FFDDDD">
    <p>ダブルアップゲーム<br>
    </p>
    <?php
    //前述の選択を表示
    $choice=$_GET['choice'];
    $closeCard=$_GET["closeCard"];
    $openCard=$_GET["openCard"];
    ?>
    <img src="css/<?php echo "$closeCard"; ?>.png">
    <img src="css/<?php echo "$openCard"; ?>.png">
    <?php
    //closeCardとopenCardの数字の取り込み関数
    function numberJudge($num){
      $x=floor(($num-1)/13);
      $ans=0;
      switch($x){
        case 0:
          $ans=($num-1)%13+1;
          return $ans;
        case 1:
          $ans=($num-1)%13+1;
          return $ans;
        case 2:
          $ans=($num-1)%13+1;
          return $ans;
        case 3:
          $ans=($num-1)%13+1;
          return $ans;
        default :
          print "error";
          //print $x;
          //print $num;
          //print $ans;
          break ;
      }

    }
    echo "<br>";
    echo numberJudge($closeCard);echo "<br>";
    echo numberJudge($openCard);echo "<br>";
    //数字の大きさの判定
    switch($choice){
      case 'up':
        if(numberJudge($openCard)<numberJudge($closeCard)){
          //あたり なんか書いとけ
          echo "あたり";
        }elseif(numberJudge($openCard)==numberJudge($closeCard)){
          //持ち越ししろ
          echo "同値";
        }else{
          //は　ず　れ　じゃあな
          echo "はずれ";
        }
        break;
      case 'down':
        if(numberJudge($openCard)>numberJudge($closeCard)){
          //あたり　なんか書いとけ
          echo "あたり";
        }elseif(numberJudge($openCard)==numberJudge($closeCard)){
          //持ち越ししろ
          echo "同値";
        }else{
          //は　ず　れ　じゃあな
          echo "はずれ";
        }
        break;
      default :
        print "error";
        break;
      }
    ?>
    <form action="DoubleUpChoice.php">
      <input type="submit" value="続行">
    </form>
    <form action="DoubleUpTop.php">
      <input type="submit" value="ゲームを終了しスコアを確定する">
    </form>
  </body>
</html>
