<?php
    main();
    function main () {
        $hour = date("h");
        $minites = date("i");
        if(($hour==12 || $hour==18) && (30<=$minites && $minites<=45)){
            echo "ただいま{$hour}時{$minites}分です。お腹空いた！";
        }else{
            echo "ただいま{$hour}時{$minites}分です。";
        }
    }
?>