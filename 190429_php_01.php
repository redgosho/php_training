<?php
    main();

    function main () {
        for ($i = 11; $i <= 120; $i+= 2){
            $checkPN = check_PN($i);
            if ($checkPN == 0) {
                echo "{$i}は、どの素数でも割り切れないので、素数です！\n";
            }else{
                echo "{$i}は、{$checkPN}で割り切れますので素数ではありません。\n";
            }
        }
    }

    function check_PN ($num) {
        for ($j=2; $j<$num; $j++){
            if($num%$j == 0){
                return $j;
            }
        }
        return 0;
    }
?>