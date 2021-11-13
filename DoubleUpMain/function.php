<?php
//ランダムにカードを選択する関数
function randomNumber($min,$max){
  $num = mt_rand($min,$max);
  return $num;
}

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

//数字の大きさの判定
function numberDifference($y,$z){
  $score=0;
  if($y<$z){
     $score=pow(2,$z-$y);
     if($score>500){
       $score=500;
     }
     return $score;
  }if($y>$z){
    $score=pow(2,$y-$z);
    if($score>500){
      $score=500;
    }
    return $score;
  }if($y==$z){
    return $score;
  }else{
    return $score;
  }
}
?>
