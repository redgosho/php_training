<?php
main();
function main () {
    $rintenki[10] = array(100000,"10:00");
    $rintenki[20] = array(100000,"10:15");
    $rintenki[30] = array(80000,"10:05");
    $rintenki[40] = array(80000,"10:00");
    
    $nowTime = "11:30";
    
    echo "部数表示システム\n";
    echo "現在時刻は{$nowTime}です。\n";
    for ($i=10; $i<50;$i+=10){
        $NumCopys = countCopys($rintenki[$i][1],$nowTime,$rintenki[$i][0]);
        echo "F{$i}の印刷開始時刻は{$rintenki[$i][1]}で、現在の印刷部数は{$NumCopys}です。\n";
    }
}
function countCopys ($start,$end,$sheetNum_m) {//時間の差異を出して一分の生産数をかけて、プリント枚数を数える。なおGMT
    $startSec = strtotime($start);
    $endSec   = strtotime($end);
    $diff = $endSec - $startSec;
    if ($diff>0) {
        $minites = gmdate("H",$diff) * 60 + gmdate("i",$diff);
        $sheetNum = $minites * $sheetNum_m;
        return $sheetNum;
    }
}
?>