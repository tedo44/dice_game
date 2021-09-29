<?php


$activePlayer =0;
//0 gedeg ni player 1
//1 gedeg ni player 2
$score = array(0,0);
//hojliin onoog todorhoiloh
$win = 50;

$won = 0;

while($won <$win){

    //shoo buuh toonuud
    $random = rand(1,6);

    //shoog hed buusniig hewleh
    echo "SHOO:" . $random . "<br>";

    //shoog haysniih daraah toglogchiin onoog tootsooloh 
if($random > 1){

    //toglogchiin dugariig zow haruulna
    $act=$activePlayer+1;

    //toglogchiin onoog haruulah
    $score[$activePlayer]=$score[$activePlayer]+ $random;

    //toglogchiin onoog haruulah
   echo $act ."r toglogchiin onoo: ".$score[$activePlayer]."</br>";

   //hojson toglogchiig zarlaaj
if($score[$activePlayer] > 49){
    echo $act . "-r toglogch winner!!!";
}

//dawtaltiig zogsooh onoond hvrseniig shalgah
    $won=$score[$activePlayer];
}else{
    echo "soligdloo"."<br>";
    //toglogchiin eeljiig solih
   if($activePlayer === 0){
       $activePlayer = 1;
   }else{
       $activePlayer = 0;
   }
}
}
// 1 buuwal eeljin soligdon
//50 onoo  trvvlj hvrsen n hojin 
?>
