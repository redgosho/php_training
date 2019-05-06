<?php
function main () {
    $rintenki[10] = array(100000,"10:00");
    $rintenki[20] = array(100000,"10:15");
    $rintenki[30] = array(80000,"10:05");
    $rintenki[40] = array(80000,"10:00");
    
    $nowTime = "11:30";
    $nowTime_int = strtotime($nowTime);
    
    echo "部数表示システム\n";
    echo "現在時刻は{$nowTime}です。\n";
    for ($i=10; $i<50;$i+=10){
        $startTime_int = strtotime($rintenki[$i][1]);
        $NumCopys = countCopys($nowTime_int,$startTime_int);
        echo "F{$i}の印刷開始時刻は{$rintenki[$i][1]}で、現在の印刷部数は{$NumCopys}です。\n";
    }
}
function countCopys ($nowTime_int,$startTime_int) {
    $gap = $nowTime_int - $startTime_int;
    if ($gap>0) {
        return date("i");
    }
}


?>